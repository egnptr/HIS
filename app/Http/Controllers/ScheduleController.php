<?php

namespace App\Http\Controllers;

use App\Models\Cin;
use App\Models\Patient;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $cin = Cin::where('status', 'Ongoing')->pluck('id_patient');

        $patients = Patient::find($cin);
        $cases = Cin::where('status', 'Ongoing')->get();

        #dd($cases);
        return view('schedule', [
            'cases' => $cases,
            'patients' => $patients,
        ]);
    }
}
