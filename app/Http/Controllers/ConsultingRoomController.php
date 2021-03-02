<?php

namespace App\Http\Controllers;

use App\Models\ConsultingRoom;
use Illuminate\Http\Request;

class ConsultingRoomController extends Controller
{
    public function index()
    {
        $rooms = ConsultingRoom::all();

        return view('consulting.index', [
            'rooms' => $rooms
        ]);
    }

    public function edit($id)
    {
        return view('consulting.edit', [
            'room' => ConsultingRoom::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $room = ConsultingRoom::findOrFail($id);
        //dd($request);

        $room->update([
            'doctor_in_charge' => $request->doctor_in_charge,
            'status' => $request->status,
        ]);

        return redirect()->route('consulting');
    }
}
