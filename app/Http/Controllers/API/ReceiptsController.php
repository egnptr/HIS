<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Receipt;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Room;

class ReceiptsController extends Controller
{

    public function create(Request $request)
    {

        $request->validate([
            'type' => 'required|max:255',
            'patient_name' => 'required|max:255',
            'doctor_name' => 'required|max:255',
            'room_cost' => 'required',
            'service_cost' => 'required',
            'medicine_cost',
            'consumption_cost',
            'lab_cost',
            'radiology_cost',
            'total_cost' => 'required',
        ]);

        $receipt = new Receipt;
        $receipt->type = $request->type;
        $receipt->patient_name = $request->patient_name;
        $receipt->doctor_name = $request->doctor_name;
        $receipt->room_cost = $request->room_cost;
        $receipt->service_cost = $request->service_cost;
        $receipt->medicine_cost = $request->medicine_cost;
        $receipt->consumption_cost = $request->consumption_cost;
        $receipt->lab_cost = $request->lab_cost;
        $receipt->radiology_cost = $request->radiology_cost;
        $receipt->total_cost = $request->total_cost;
        $receipt->save();

        return response()->json([
            'message' => 'Data berhasil ditambahkan',
            'Receipt' => $receipt
        ],200);

    }

    public function edit($id)
    {
        $patient = Patient::where('id',$id)->get();
        $receipt = Receipt::where('id', $id)->get();
        $doctors = Doctor::where('id', $id)->get();
        $rooms = Room::where('id', $id)->get();
        // $medicines = DB::table('orders')->get();

        return response()->json([
            'message' => 'Success',
            'Receipt' => $receipt,
            'Patient' => $patient,
            'Doctors' => $doctors,
            'Rooms' => $rooms
        ],200);
    }

    public function update(Request $request, $id)
    {
        $receipt = Receipt::find($id);

        $request->validate([
            'type' => 'required|max:255',
            'patient_name' => 'required|max:255',
            'doctor_name' => 'required|max:255',
            'room_cost' => 'required',
            'service_cost' => 'required',
            'medicine_cost',
            'consumption_cost',
            'lab_cost',
            'radiology_cost',
            'total_cost' => 'required',
        ]);

        $receipt->update([
            'type' => $request->type,
            'patient_name' => $request->patient_name,
            'doctor_name'=> $request->doctor_name,
            'room_cost' => $request->room_cost,
            'service_cost' => $request->service_cost ,
            'medicine_cost' => $request->medicine_cost,
            'consumption_cost' => $request->consumption_cost,
            'lab_cost' => $request->lab_cost,
            'radiology_cost' => $request->radiology_cost,
            'total_cost' => $request->total_cost,
        ]);

        return response()->json([
            'message' => 'Success',
            'Receipt' => $receipt
        ],200);
    }

    public function delete($id)
    {
        $receipt = Receipt::find($id)->delete();

        return response()->json([
            'message' => 'Receipt Deleted.',
        ],200);
    }
}