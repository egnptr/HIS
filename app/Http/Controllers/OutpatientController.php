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

class OutpatientController extends Controller
{
    public function index()
    {
        return view('outpatient.index');
    }

    public function patient()
    {
        
        if(Role::find(Auth::user()->role_id == 1)) {
            $cin = Cin::where('type', 'Outpatient')->where('status', 'Ongoing')->pluck('id_patient');
    
            $patients = Patient::find($cin);
    
            return view('outpatient.patientlist', [
                'patients' => $patients,
            ]);
        }
        
        if(Role::find(Auth::user()->role_id == 2)) {
            $name = Auth::user()->name;
            
            $id_doctor = Doctor::where('name', $name)->pluck('id');
            
            $cin = Cin::where('type', 'Outpatient')->where('status', 'Ongoing')->where('id_doctor', $id_doctor)->pluck('id_patient');
    
            $patients = Patient::find($cin);
    
            return view('outpatient.patientlist', [
                'patients' => $patients,
            ]);
        }
    }

    public function create()
    {
        $patients = Patient::all();
        $doctors = Doctor::all();
        $group_case = Group_case::all();

        return view('outpatient.create', [
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
        
        return redirect()->route('outpatient.patientlist');
    }
    
    public function show($id)
    {
        $patient = Patient::findOrFail($id);

        return view('outpatient.show', [
            'patient' => $patient
        ]);
    }
public function payment($id)
    {
        $patient = Patient::findOrFail($id);
        
        $cin = Cin::where('type', 'Outpatient')->where('status', 'Ongoing')->where('id_patient', $id)->pluck('date_in');

        
        $service_cost = 500000;
        $administration_cost = 30000;
        
        $id_cin = Cin::where('type', 'Outpatient')->where('status', 'Ongoing')->where('id_patient', $id)->pluck('id');
        
        $total_cost = $service_cost + $administration_cost;
        
        return view('outpatient.payment', [
            'patient' => $patient,
            'service_cost' => $service_cost,
            'administration_cost' =>  $administration_cost,
            'total_cost' => $total_cost
        ]); 
    }
    
    public function finish($id,$service_cost, $total_cost)
    {
        
        $cin = Cin::where('type', 'Outpatient')->where('status', 'Ongoing')->where('id_patient', $id);
        
        $id_doctor = Cin::where('type', 'Outpatient')->where('status', 'Ongoing')->where('id_patient', $id)->pluck('id_doctor');
        
        $doctor = Doctor::where('id', $id_doctor)->pluck('name');
        
        $patient = Patient::where('id', $id)->pluck('name');
        
        $cin->update([
            'status' => 'Finished',
            'date_out' => Carbon::now()
        ]);
        
        Receipt::create([
            'type' => 'Outpatient',
            'patient_name' => $patient->first(),
            'doctor_name' => $doctor->first(),
            'service_cost' => $service_cost,
            'total_cost' => $total_cost
        ]);
        
        return redirect()->route('outpatient.patientlist');
    }
}