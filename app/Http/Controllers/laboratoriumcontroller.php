<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Models\Patient;
use App\Models\Cin;
use App\Models\Doctor;
use App\Models\Role;
use App\Models\Nurse;
use App\Models\Group_case;
use App\Models\Room;
use App\Models\Emr;
use App\Models\Receipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class laboratoriumcontroller extends Controller
{
    public function index()
    {
        return view('Laboratorium.index');
    }

    public function patient()
    {
        
        if(Role::find(Auth::user()->role_id == 1)) {
            $cin = Cin::where('type', 'Laboratorium')->where('status', 'Ongoing')->pluck('id_patient');
    
            $patients = Patient::find($cin);
    
            return view('Laboratorium.laboratorypatient', [
                'patients' => $patients,
            ]);
        }
        
        if(Role::find(Auth::user()->role_id == 2)) {
            $name = Auth::user()->name;
            
            $id_doctor = Doctor::where('name', $name)->pluck('id');
            
            $cin = Cin::where('type', 'Laboratorium')->where('status', 'Ongoing')->where('id_doctor', $id_doctor)->pluck('id_patient');
    
            $patients = Patient::find($cin);
    
            return view('Laboratorium.laboratorypatient', [
                'patients' => $patients,
            ]);
        }
    }

    public function create()
    {
        $patients = Patient::all();
        $doctors = Doctor::all();
        $group_case = Group_case::all();

        return view('Laboratorium.create', [
            'patients' => $patients,
            'doctors' => $doctors,
            'group_cases' => $group_case,
        ]);
    }

    public function store(Request $request)
    {
        #dd($request);
        
        $this->validate($request, [
            'id_patient' => 'required',
            'id_doctor' => 'required',
            'date_in' => 'required',
            'group_case' => 'required|max:255',
            'case_detail' => 'required|max:255',
            'type' => 'required',
            'status' => 'required',
        ]);
        
        $emr = Emr::where('id_patient', $request->id_patient);
    
        Cin::create($request->all());
        
        $cin = Cin::where('id_patient', $request->id_patient)->where('id_doctor', $request->id_doctor)

                ->where('date_in', $request->date_in)->where('group_case', $request->group_case)

                ->where('case_detail', $request->case_detail)->where('type', $request->type)

                ->where('status', $request->status)->pluck('id');

                

        $emr->update([

            'id_cin' => $cin->first(),

            'diagnosis' => $request->case_detail    

        ]);

        

        return redirect()->route('Laboratorium.laboratorypatient');

    }

    

    public function checkout($id)

    {

        $patient = Patient::findOrFail($id);

        

        $cin = Cin::where('type', 'Laboratium')->where('status', 'Ongoing')->where('id_patient', $id)->pluck('date_in');

        

        $total_cost = 0;



        $scanning_lab = array();

        $scanning_lab_cost = array();

        



        

        $scanning_tool_cin = Cin::where('type', 'Laboratorium')->where('status', 'Ongoing')->where('id_patient', $id)->get();

        foreach($scanning_tool_cin as $stc) {

            if($stc->scanning_tool == "MRI"){

                array_push($scanning_tool, $stc->scanning_tool);

                array_push($scanning_tool_cost, 500000);

                $total_cost += 500000;

            }else if($stc->scanning_lab == "CT"){

                array_push($scanning_lab, $stc->scanning_lab);

                array_push($scanning_lab_cost, 1000000);

                $total_cost += 1000000;

            }else if($stc->scanning_lab == "USG"){

                array_push($scanning_lab, $stc->scanning_lab);

                array_push($scanning_lab_cost, 1500000);

                $total_cost += 1500000;

            }

        }

        

        

        return view('Laboratorium.checkout', [

            'patient' => $patient,

            'scanning_lab_cost' => $scanning_lab_cost,

            'scanning_lab' => $scanning_lab,

            'total_cost' => $total_cost

        ]); 

    }

    

    public function show($id)

    {

        $patient = Patient::findOrFail($id);



        return view('Laboratorium.show', [

            'patient' => $patient

        ]);

    }

    

    public function finish($id, $scanning_lab_cost, $scanning_lab, $total_cost)

    {

        

        $cin = Cin::where('type', 'Laboratorium')->where('status', 'Ongoing')->where('id_patient', $id);

        

        $id_doctor = Cin::where('type', 'Laboratorium')->where('status', 'Ongoing')->where('id_patient', $id)->pluck('id_doctor');

        

        $doctor = Doctor::where('id', $id_doctor)->pluck('name');

        

        $patient = Patient::where('id', $id)->pluck('name');

        

        $cin->update([

            'status' => 'Finished',

            'date_out' => Carbon::now()

        ]);

        

        

        Receipt::create([

            'type' => 'Laboratorium',

            'patient_name' => $patient->first(),

            'doctor_name' => $doctor->first(),

            'laboratory_cost' => $scanning_lab_cost,

            'total_cost' => $total_cost

        ]);

        

        return redirect()->route('Laboratorium.laboratorypatient');

    }



}