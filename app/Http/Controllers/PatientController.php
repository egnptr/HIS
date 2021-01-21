<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::latest()->paginate(20);

        return view('patient.index', [
            'patients' => $patients
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'nik' => 'required|max:20',
            'sex' => 'required|max:1',
            'dob' => 'required',
            'email' => 'required|max:255',
            'phone' => 'required|max:15',
            'address' => 'required',
        ]);

        Patient::create([
            'name' => $request->name,
            'nokta' => $request->nokta,
            'sex' => $request->sex,
            'dob' => $request->dob,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return back();
    }

    public function show($id)
    {
        $patient = Patient::findOrFail($id);

        return view('patient.show', [
            'patient' => $patient
        ]);
    }

    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);

        $patient->delete();

        return back();
    }
}