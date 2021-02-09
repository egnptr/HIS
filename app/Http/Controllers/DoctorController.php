<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::latest()->paginate(10);

        return view('doctor.index', [
            'doctors' => $doctors
        ]);
    }

    public function show($id)
    {
        $doctor = Doctor::findOrFail($id);

        return view('doctor.show', [
            'doctor' => $doctor
        ]);
    }

    public function create()
    {
        return view('doctor.create');
    }

    public function edit($id)
    {
        return view('doctor.edit', [
            'doctor' => Doctor::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);

        $doctor->update([
            'name' => $request->name,
            'nokta' => $request->nokta,
            'sex' => $request->sex,
            'dob' => $request->dob,
            'position' => $request->position,
            'education' => $request->education,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('doctor');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'nokta' => 'required',
            'sex' => 'required|max:1',
            'dob' => 'required',
            'position' => 'required',
            'education' => 'required',
            'email' => 'required|max:255',
            'phone' => 'required|max:15',
        ]);

        // Doctor::create([
        //     'name' => $request->name,
        //     'nokta' => $request->nokta,
        //     'sex' => $request->sex,
        //     'dob' => $request->dob,
        //     'position' => $request->position,
        //     'education' => $request->education,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        // ]);

        Doctor::create($request->all());

        return redirect()->route('doctor');
    }

    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);

        $doctor->delete();

        return back();
    }
}
