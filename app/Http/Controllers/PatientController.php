<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::latest()->paginate(10);

        return view('patient.index', [
            'patients' => $patients
        ]);
    }

    public function create()
    {
        return view('patient.create');
    }

    public function edit($id)
    {
        return view('patient.edit', [
            'patient' => Patient::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $patient = Patient::findOrFail($id);

        $patient->update([
            'name' => $request->name,
            'pin' => $request->pin,
            'cin' => $request->cin,
            'sex' => $request->sex,
            'dob' => $request->dob,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()->route('patient');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'pin' => 'required|max:20',
            'cin' => 'required|max:20',
            'sex' => 'required|max:1',
            'dob' => 'required',
            'email' => 'required|max:255',
            'phone' => 'required|max:15',
            'address' => 'required',
        ]);

        // Patient::create([
        //     'name' => $request->name,
        //     'nik' => $request->nik,
        //     'sex' => $request->sex,
        //     'dob' => $request->dob,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'address' => $request->address,
        // ]);

        Patient::create($request->all());


        return redirect()->route('patient');
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
