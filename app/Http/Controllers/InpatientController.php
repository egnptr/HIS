<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Cin;
use Illuminate\Http\Request;
use DB;

class InpatientController extends Controller
{
    public function index()
    {
        return view('inpatient.index');
    }

    public function dashboard()
    {
        $cin = Cin::where('type', 'Inpatient')->where('status', 'Ongoing')->pluck('id_patient');
        
        $patients = Patient::find($cin);

        return view('inpatient.dashboard', [
            'patients' => $patients
        ]);
    }

    public function show($id)
    {
        $patient = Patient::findOrFail($id);

        return view('patient.show', [
            'patient' => $patient
        ]);
    }
}
