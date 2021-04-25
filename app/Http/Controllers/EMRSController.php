<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Emr;

class EMRSController extends Controller
{
    public function create(Request $request)
    {
        //Validation
        $request->validate([
            'id_patient' => 'required',
            'id_cin' => 'required',
            'blood_pressure' => 'required',
            'heart_rate' => 'required',
            'blood_sugar' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'diagnosis' => 'required',
        ]);

        $emrs = new Emr;
        $emrs->id_patient = $request->id_patient;
        $emrs->id_cin = $request->id_cin;
        $emrs->blood_pressure = $request->blood_pressure;
        $emrs->heart_rate = $request->heart_rate;
        $emrs->blood_sugar= $request->blood_sugar;
        $emrs->height = $request->height;
        $emrs->weight = $request->weight;
        $emrs->diagnosis= $request->diagnosis;
        $emrs->save();

        return response()->json([
            'message' => 'Data berhasil ditambahkan',
            'EMRS Data' => $emrs
        ],200);
    }
    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        $emrs = Emr::where('id_patient', $id)->get();
        
        return response()->json([
            'message' => 'Success',
            'EMRS Data' => $emrs,
            'Patient Data' => $patient
        ],200);
    }
    public function update(Request $request, $id)
    {
        $emrs = Emr::where('id_patient', $id)->get();
        
        $emrs = $emrs->first();
        
        $cin = Cin::find($emrs->id_cin);

        $request->validate([
            'id_patient' => 'required',
            'id_cin' => 'required',
            'blood_pressure' => 'required',
            'heart_rate' => 'required',
            'blood_sugar' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'diagnosis' => 'required',
        ]);

        $emrs->update([
            'id_patient' => 'required',
            'id_cin' => 'required',
            'blood_pressure' => 'required',
            'heart_rate' => 'required',
            'blood_sugar' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'diagnosis' => 'required',
        ]);
        
        $cin->update([
            'case_detail' => $request->diagnosis    
        ]);

        return response()->json([
            'message' => 'Success',
            'EMRS Data' => $emrs,
            'CIN Data' => $cin
        ],200);
    }
    public function delete($id)
    {
        $emrs = Emr::find($id)->delete();

        return response()->json([
            'message' => 'Data EMR berhasil dihapus',
        ],200);
    }
}
