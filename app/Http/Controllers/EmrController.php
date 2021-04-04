<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Emr;
use Illuminate\Http\Request;

class EmrController extends Controller
{
    
    public function create()
    {
        return view('emr.create');
    }

    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        
        $emr = Emr::where('id_patient', $id)->get();
        
        return view('emr.edit', [
            'emr' => $emr,
            'patient' => $patient
        ]);
    }

    public function update(Request $request, $id)
    {
        $emr = Emr::findOrFail($id);

        $emr->update([
            'blood_pressure' => $request->blood_pressure,
            'heart_rate' => $request->heart_rate,
            'blood_sugar' => $request->blood_sugar,
        ]);

        return redirect()->route('emr.show', $id);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'blood_pressure' => 'required|max:255',
            'heart_rate' => 'required|max:255',
            'blood_sugar' => 'required|max:255',
        ]);

        Emr::create($request->all());


        return redirect()->route('inpatient.patient');
    }

    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        
        $emr = Emr::where('id_patient', $id)->get();

        return view('emr.show', [
            'emr' => $emr,
            'patient' => $patient
        ]);
    }
}