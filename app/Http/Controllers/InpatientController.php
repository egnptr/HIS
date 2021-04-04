<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Cin;
use App\Models\Doctor;
use App\Models\Role;
use App\Models\Nurse;
use App\Models\Room_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InpatientController extends Controller
{
    public function index()
    {
        return view('inpatient.index');
    }

    public function patient()
    {
        if(Role::find(Auth::user()->role_id == 2)) {
            $name = Auth::user()->name;
            
            $id_doctor = Doctor::where('name', $name)->pluck('id');
            
            $cin = Cin::where('type', 'Inpatient')->where('status', 'Ongoing')->where('id_doctor', $id_doctor)->pluck('id_patient');
    
            $patients = Patient::find($cin);
    
            return view('inpatient.patient', [
                'patients' => $patients,
            ]);
        }
        
        if(Role::find(Auth::user()->role_id == 1)) {
            $cin = Cin::where('type', 'Inpatient')->where('status', 'Ongoing')->pluck('id_patient');
    
            $patients = Patient::find($cin);
    
            return view('inpatient.patient', [
                'patients' => $patients,
            ]);
        }
        
        if(Role::find(Auth::user()->role_id == 3)) {
            $name = Auth::user()->name;
            
            $id_nurse = Nurse::where('name', $name)->pluck('id');
            
            $room = Room_detail::where('nurse_in_charge', $id_nurse)->where('status', 'Not Available')->pluck('id_patient');
            
            $patients = Patient::find($room);
            
            return view('inpatient.patient', [
                'patients' => $patients,    
            ]);
        }
    }

    public function create()
    {
        $patients = Patient::all();
        $doctors = Doctor::all();

        return view('inpatient.create', [
            'patients' => $patients,
            'doctors' => $doctors,
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

        Cin::create($request->all());

        return redirect()->route('inpatient.list');
    }

    public function show($id)
    {
        $patient = Patient::findOrFail($id);

        return view('inpatient.show', [
            'patient' => $patient
        ]);
    }
}
