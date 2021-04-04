<?php

namespace App\Http\Controllers;

use App\Models\Nurse;
use App\Models\Patient;
use App\Models\Room;
use App\Models\Room_detail;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        return view('room.index');
    }

    public function type()
    {
        $rooms = Room::all();

        return view('room.type', [
            'rooms' => $rooms
        ]);
    }

    public function warda()
    {
        $rooms = Room_detail::where('ward', 'A')->get();

        return view('room.warda', [
            'rooms' => $rooms
        ]);
    }

    public function wardb()
    {
        $rooms = Room_detail::where('ward', 'B')->get();

        return view('room.wardb', [
            'rooms' => $rooms
        ]);
    }

    public function edit($id)
    {
        $patients = Patient::all();
        $nurses = Nurse::all();

        return view('room.edit', [
            'room' => Room_detail::findOrFail($id),
            'patients' => $patients,
            'nurses' => $nurses,
        ]);
    }

    public function update(Request $request, $id)
    {
        $room = Room_detail::findOrFail($id);
        //dd($request);

        $room->update([
            'nurse_in_charge' => $request->nurse_in_charge,
            'id_patient' => $request->id_patient,
            'status' => $request->status,
        ]);

        return redirect()->route('room');
    }

    public function getcost(Request $request)
    {
        $data = $request->all();
        $rooms = Room::where('room_name', '=', $data)->get('cost');

        return response()->json($rooms, 200);
    }
}
