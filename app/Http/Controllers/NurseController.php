<?php

namespace App\Http\Controllers;

use App\Models\Nurse;
use Illuminate\Http\Request;

class NurseController extends Controller
{
    public function index()
    {
        $nurses = Nurse::latest()->paginate(10);

        return view('nurse.index', [
            'nurses' => $nurses
        ]);
    }

    public function show($id)
    {
        $nurse = Nurse::findOrFail($id);

        return view('nurse.show', [
            'nurse' => $nurse
        ]);
    }

    public function create()
    {
        return view('nurse.create');
    }

    public function edit($id)
    {
        return view('nurse.edit', [
            'nurse' => Nurse::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $nurse = Nurse::findOrFail($id);

        $nurse->update([
            'name' => $request->name,
            'nokta' => $request->nokta,
            'dob' => $request->dob,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('nurse');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'nokta' => 'required',
            'dob' => 'required',
            'email' => 'required|max:255',
            'phone' => 'required|max:15',
        ]);

        Nurse::create($request->all());

        return redirect()->route('nurse');
    }

    public function destroy($id)
    {
        $nurse = Nurse::findOrFail($id);

        $nurse->delete();

        return back();
    }
}
