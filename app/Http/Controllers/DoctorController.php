<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::latest()->paginate(20);

        return view('doctor.index', [
            'doctors' => $doctors
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'nokta' => 'required|max:15',
            'sex' => 'required|max:1',
            'dob' => 'required',
            'position' => 'required',
            'education' => 'required',
            'email' => 'required|max:255',
            'phone' => 'required|max:15',
        ]);

        Doctor::create([
            'name' => $request->name,
            'nokta' => $request->nokta,
            'sex' => $request->sex,
            'dob' => $request->dob,
            'position' => $request->position,
            'education' => $request->education,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return back();
    }

    public function show($id)
    {
        $doctor = Doctor::findOrFail($id);

        return view('doctor.show', [
            'doctor' => $doctor
        ]);
    }

    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);

        $doctor->delete();

        return back();
    }
}
