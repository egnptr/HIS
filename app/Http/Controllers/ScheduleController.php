<?php

namespace App\Http\Controllers;

use App\Models\Cin;
use App\Models\Doctor;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        return view('schedule.schedule');
    }

    public function table(Request $request)
    {
        if(Role::find(Auth::user()->role_id == 2)) {

            $name = Auth::user()->name;
            $doctor = Doctor::where('name', $name)->pluck('id');
            $date = $_GET['tanggal'];

            $cases = Cin::where('status', 'Ongoing')->whereDate('date_in', '=', $date)->where('id_doctor', $doctor)->get();

            return view('schedule.table', [
                'cases' => $cases
            ]);
        } else if (Role::find(Auth::user()->role_id == 1)) {
            $date = $_GET['tanggal'];

            $cases = Cin::where('status', 'Ongoing')->whereDate('date_in', '=', $date)->get();

            return view('schedule.table', [
                'cases' => $cases
            ]);
        }
    }
}
