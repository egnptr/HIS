<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class InpatientController extends Controller
{
    public function index()
    {
        return view('inpatient.index');
    }

    public function dashboard()
    {
        $patients = Patient::latest()->paginate(10);

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
