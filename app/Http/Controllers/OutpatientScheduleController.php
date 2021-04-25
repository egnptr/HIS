<?php

namespace App\Http\Controllers;

use App\Models\Cin;
use App\Models\Doctor;
use App\Models\Role;
use App\Models\Nurse;
use App\Models\Patient;
use App\Models\Room_detail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OutpatientScheduleController extends Controller
{
    public function index()
    {
        return view('outpatient.schedule');
    }

    public function table(Request $request)
    {
        if(Role::find(Auth::user()->role_id == 2)) {

            $name = Auth::user()->name;
            $doctor = Doctor::where('name', $name)->pluck('id');
            $date = $_GET['tanggal'];

            $cases = Cin::where('status', 'Ongoing')->whereDate('date_in', '=', $date)->where('id_doctor', $doctor)->where('type', 'Outpatient')->get();
            $cases = $cases->merge(Cin::where('status', 'Finished')->whereDate('date_out', '=', $date)->where('type', 'Outpatient')->get());
            
            $id_patient = $cases->pluck('id_patient') ;
            
            $patients = Patient::find($id_patient);

            return view('outpatient.scheduletable', [
                'cases' => $cases,
                'patients' => $patients
            ]);
            
        } else if (Role::find(Auth::user()->role_id == 1)) {
            $date = $_GET['tanggal'];

            $cases = Cin::where('status', 'Ongoing')->whereDate('date_in', '=', $date)->where('type', 'Outpatient')->get();
            $cases = $cases->merge(Cin::where('status', 'Finished')->whereDate('date_out', '=', $date)->where('type', 'Outpatient')->get());
            
            $id_patient = $cases->pluck('id_patient') ;
            
            $patients = Patient::find($id_patient);

            return view('outpatient.scheduletable', [
                'cases' => $cases,
                'patients' => $patients
            ]);
            
        } else if (Role::find(Auth::user()->role_id == 3)) {
            
            $name = Auth::user()->name;
            $id_nurse = Nurse::where('name', $name)->pluck('id');
            $date = $_GET['tanggal'];
            
            $id_patient = Room_detail::where('nurse_in_charge', $id_nurse)->where('status', 'Not Available')->pluck('id_patient');

            $patient_cases = Cin::where('status', 'Ongoing')->whereDate('date_in', '=', $date)->where('type', 'Outpatient')->pluck('id_patient');
            $patient_cases = $patient_cases->merge(Cin::where('status', 'Finished')->whereDate('date_out', '=', $date)->where('type', 'Outpatient')->pluck('id_patient'));
            
            $cases = collect();
            
            foreach($patient_cases as $patient_case) {
                foreach($id_patient as $patient) {
                    if($patient_case == $patient) {
                        $cases = $cases->merge(Cin::where('status', 'Ongoing')->whereDate('date_in', '=', $date)->where('type', 'Outpatient')->where('id_patient', $patient_case)->get());
                        $cases = $cases->merge(Cin::where('status', 'Finished')->whereDate('date_out', '=', $date)->where('type', 'Outpatient')->where('id_patient', $patient_case)->get());
                    }
                }
            }
            
            $patients = Patient::find($id_patient);

            return view('outpatient.scheduletable', [
                'cases' => $cases,
                'patients' => $patients
            ]);
        }
    }
}