<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Receipt;
use App\Models\Room;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function index()
    {
        $receipts = Receipt::latest()->paginate(10);

        return view('receipt.index', [
            'receipts' => $receipts
        ]);
    }

    public function create()
    {
        $patients = Patient::all();
        $doctors = Doctor::all();
        $rooms = Room::all();

        return view('receipt.create', [
            'patients' => $patients,
            'doctors' => $doctors,
            'rooms' => $rooms,
        ]);
    }

    public function edit($id)
    {
        $patients = Patient::all();
        $doctors = Doctor::all();
        $rooms = Room::all();

        return view('receipt.edit', [
            'receipt' => Receipt::findOrFail($id),
            'patients' => $patients,
            'doctors' => $doctors,
            'rooms' => $rooms,
        ]);
    }

    public function update(Request $request, $id)
    {
        $receipt = Receipt::findOrFail($id);

        $receipt->update([
            'patient_name' => $request->patient_name,
            'doctor_name'=> $request->doctor_name,
            'date_in' => $request->date_in,
            'date_out' => $request->date_out,
            'room_type' => $request->room_type,
            'room_cost' => $request->room_cost,
            'medicine_cost' => $request->medicine_cost,
            'consumption_cost' => $request->consumption_cost,
            'lab_cost' => $request->lab_cost,
            'radiology_cost' => $request->radiology_cost,
            'maintenance_cost' => $request->maintenance_cost,
            'total_cost' => $request->total_cost,
            'paid_off' => $request->paid_off,
        ]);

        return redirect()->route('receipt');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'patient_name' => 'required|max:255',
            'doctor_name' => 'required|max:255',
            'date_in' => 'required',
            'date_out' => 'required',
            'room_type' => 'required',
            'room_cost' => 'required',
            'medicine_cost',
            'consumption_cost',
            'lab_cost',
            'radiology_cost',
            'maintenance_cost',
            'total_cost' => 'required',
        ]);

        Receipt::create($request->all());

        return redirect()->route('receipt');
    }

    public function show($id)
    {
        $receipt = Receipt::findOrFail($id);

        return view('receipt.show', [
            'receipt' => $receipt
        ]);
    }

    public function destroy($id)
    {
        $receipt = Receipt::findOrFail($id);

        $receipt->delete();

        return back();
    }
}
