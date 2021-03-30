@extends('layout/app')

@section('title')
<title>Outpatient - Dashboard</title>

@section('content')
<div class="flex justify-center">
    <div class="w-3/4 bg-white p-9 rounded-lg">
        <div class="px-6 py-4 bg-white border-b border-gray-200 font-bold uppercase">
            Outpatient
        </div>
        
        <div class="container mx-auto mt-10 grid grid-cols-1 gap-8 md:grid-cols-3 xl:grid-cols-3">
            <div class="card bg-white shadow h-auto w-auto rounded-2xl overflow-hidden relative">
                <h1 class="shadow-md text-l font-bold text-center text-gray-600 uppercase p-3">Patient Schedule</h1>
                <img class="py-2 transform scale-110" src="{{ asset('img/doctor.jpeg') }}" alt="" />
                <button class="card bg-gray-700 hover:bg-gray-600 transition text-white w-full h-1/6 absolute bottom-0 ">Show table</button>
            </div>
            
            <div class="card bg-white shadow h-auto w-auto rounded-2xl overflow-hidden relative">
                <h1 class="shadow-md text-l font-bold text-center text-gray-600 uppercase p-3">Patient Payment</h1>
                <img class="py-2 transform scale-110" src="{{ asset('img/doctor.jpeg') }}" alt="" />
                <button class="card bg-gray-700 hover:bg-gray-600 transition text-white w-full h-1/6 absolute bottom-0 ">Show table</button>
            </div>
            
        </div>
        
    </div>
</div>

@endsection