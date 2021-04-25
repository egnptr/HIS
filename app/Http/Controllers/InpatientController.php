<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Patient;
use App\Models\Cin;
use App\Models\Doctor;
use App\Models\Role;
use App\Models\Nurse;
use App\Models\Room_detail;
use App\Models\Room;
use App\Models\Group_case;
use App\Models\Emr;
use App\Models\Food_order;
use App\Models\Food_menu;
use App\Models\Receipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InpatientController extends Controller
{
    public function index()
    {
        return view('inpatient.index');
    }

    public function patient()
    {
        if(Role::find(Auth::user()->role_id == 2)) {
            $name = Auth::user()->name;
            
            $id_doctor = Doctor::where('name', $name)->pluck('id');
            
            $cin = Cin::where('type', 'Inpatient')->where('status', 'Ongoing')->where('id_doctor', $id_doctor)->pluck('id_patient');
    
            $patients = Patient::find($cin);
    
            return view('inpatient.patient', [
                'patients' => $patients,
            ]);
        }
        
        if(Role::find(Auth::user()->role_id == 1)) {
            $cin = Cin::where('type', 'Inpatient')->where('status', 'Ongoing')->pluck('id_patient');
    
            $patients = Patient::find($cin);
    
            return view('inpatient.patient', [
                'patients' => $patients,
            ]);
        }
        
        if(Role::find(Auth::user()->role_id == 3)) {
            $name = Auth::user()->name;
            
            $id_nurse = Nurse::where('name', $name)->pluck('id');
            
            $room = Room_detail::where('nurse_in_charge', $id_nurse)->where('status', 'Not Available')->pluck('id_patient');
            
            $patients = Patient::find($room);
            
            return view('inpatient.patient', [
                'patients' => $patients,    
            ]);
        }
    }

    public function create()
    {
        $patients = Patient::all();
        $doctors = Doctor::all();
        $group_case = Group_case::all();
        $room = Room_detail::where('status', 'Available')->get();

        return view('inpatient.create', [
            'patients' => $patients,
            'doctors' => $doctors,
            'group_cases' => $group_case,
            'rooms' => $room
        ]);
    }

    public function store(Request $request)
    {
        #dd($request);
        
        $this->validate($request, [
            'id_patient' => 'required',
            'id_doctor' => 'required',
            'date_in' => 'required',
            'group_case' => 'required|max:255',
            'case_detail' => 'required|max:255',
            'type' => 'required',
            'status' => 'required',
            'room' => 'required'
        ]);
        
        $emr = Emr::where('id_patient', $request->id_patient);
        
        $room = Room_detail::where('id', $request->room);
    
        Cin::create($request->all());
        
        $cin = Cin::where('id_patient', $request->id_patient)->where('id_doctor', $request->id_doctor)
                ->where('date_in', $request->date_in)->where('group_case', $request->group_case)
                ->where('case_detail', $request->case_detail)->where('type', $request->type)
                ->where('status', $request->status)->pluck('id');
                
        $emr->update([
            'id_cin' => $cin->first(),
            'diagnosis' => $request->case_detail    
        ]);
        
        $room->update([
            'id_patient' => $request->id_patient,
            'status' => 'Not Available'
        ]);

        return redirect()->route('inpatient.list');
    }

    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        
        $room  = Room_detail::where('id_patient', $id)->get();
    
        return view('inpatient.show', [
            'patient' => $patient,
            'room' => $room,
        ]);
    }
    
    public function orderFood($id)
    {
        $patients = Patient::findOrFail($id);
        
        return view('inpatient.orderfood', [
            'patients' => $patients
        ]);
    }
    
    public function storeOrderFood(Request $request, $id)
    {
        #dd($request);
        
        $cin = Cin::where('type', 'Inpatient')->where('status', 'Ongoing')->where('id_patient', $id)->pluck('id');
        
        $this->validate($request, [
            'food1Quantity' => 'required',
            'food2Quantity' => 'required',
            'food3Quantity' => 'required',
            'food4Quantity' => 'required'
        ]);
        
        Food_order::create([
            'id_cin' => $cin->first(),
            'food1Quantity' => $request->food1Quantity,
            'food2Quantity' => $request->food2Quantity,
            'food3Quantity' => $request->food3Quantity,
            'food4Quantity' => $request->food4Quantity
        ]);
        
        return redirect()->route('inpatient.list');
    }
    
    public function checkout($id)
    {
        $patient = Patient::findOrFail($id);
        
        $cin = Cin::where('type', 'Inpatient')->where('status', 'Ongoing')->where('id_patient', $id)->pluck('date_in');
        $cin = Carbon::parse($cin->first());
        
        $current_time = Carbon::now();
        $duration = $cin->diffInDays($current_time) + 1;
        
        $room_type = Room_detail::where('id_patient', $id)->where('status', 'Not Available')->pluck('type');
        $room_cost = Room::where('room_name', $room_type)->pluck('cost')->first();
        $duration_cost = ((int) $duration) * (int) $room_cost;
        
        $service_cost = (int) $duration * 500000;
        
        $id_cin = Cin::where('type', 'Inpatient')->where('status', 'Ongoing')->where('id_patient', $id)->pluck('id');
        $food_orders = Food_order::where('id_cin', $id_cin)->get();
        
        $group_case = Cin::where('type', 'Inpatient')->where('status', 'Ongoing')->where('id_patient', $id)->pluck('group_case');
        $group_case = Group_case::where('id', $group_case)->pluck('treatment_fee');
        
        $service_cost = $service_cost + (int) $group_case->first();
        
        $consumption_cost = 0;
        
        foreach($food_orders as $food_order) {
            $consumption_cost = $consumption_cost + ( $food_order->food1Quantity * Food_menu::where('id', '1')->pluck('price')->first());
            $consumption_cost = $consumption_cost + ( $food_order->food2Quantity * Food_menu::where('id', '2')->pluck('price')->first());
            $consumption_cost = $consumption_cost + ( $food_order->food3Quantity * Food_menu::where('id', '3')->pluck('price')->first());
            $consumption_cost = $consumption_cost + ( $food_order->food4Quantity * Food_menu::where('id', '4')->pluck('price')->first());
        }
        
        $total_cost = $duration_cost + $service_cost + $consumption_cost;

        return view('inpatient.checkout', [
            'patient' => $patient,
            'duration' => $duration,
            'duration_cost' => $duration_cost,
            'service_cost' => $service_cost,
            'consumption_cost' => $consumption_cost,
            'total_cost' => $total_cost,
            'room_type' => $room_type->first()
        ]); 
    }
    
    public function finish($id, $duration_cost, $service_cost, $consumption_cost, $total_cost)
    {
        
        $cin = Cin::where('type', 'Inpatient')->where('status', 'Ongoing')->where('id_patient', $id);
        
        $id_doctor = Cin::where('type', 'Inpatient')->where('status', 'Ongoing')->where('id_patient', $id)->pluck('id_doctor');
        
        $doctor = Doctor::where('id', $id_doctor)->pluck('name');
        
        $patient = Patient::where('id', $id)->pluck('name');
        
        $cin->update([
            'status' => 'Finished',
            'date_out' => Carbon::now()
        ]);
        
        $room = Room_detail::where('id_patient', $id)->where('status', 'Not Available');
        $room->update([
            'status' => 'Available',
            'id_patient' => NULL,
            'updated_at' => Carbon::now()
        ]);
        
        Receipt::create([
            'type' => 'Inpatient',
            'patient_name' => $patient->first(),
            'doctor_name' => $doctor->first(),
            'room_cost' => $duration_cost,
            'service_cost' => $service_cost,
            'consumption_cost' => $consumption_cost,
            'total_cost' => $total_cost
        ]);
        
        return redirect()->route('inpatient.list');
    }
}
