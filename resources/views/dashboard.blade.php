@extends('layout.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <div class="px-6 py-4 bg-white border-b border-gray-200 font-bold uppercase">
                Dashboard
            </div>

            <div class="container mx-auto mt-10 grid grid-cols-1 gap-8 md:grid-cols-3 xl:grid-cols-3">
                <div class="card bg-white shadow h-auto w-auto rounded-2xl overflow-hidden relative">
                    <h1 class="shadow-md text-l font-bold text-center text-gray-600 uppercase p-3">Doctor List</h1>
                    <img class="py-2 transform scale-110" src="{{ asset('img/doctor.jpeg') }}" alt="" />
                    <button onclick="location.href='{{ route('doctor') }}'" class="card bg-gray-700 hover:bg-gray-600 transition text-white w-full h-1/6 absolute bottom-0 ">Show table</button>
                </div>

                <div class="card bg-white shadow h-auto w-auto rounded-2xl overflow-hidden relative">
                    <h1 class="shadow-md text-l font-bold text-center text-gray-600 uppercase p-3">Patient List</h1>
                    <img class="py-10 transform scale-150" src="{{ asset('img/patient.jpg') }}" alt="" />
                    <button onclick="location.href='{{ route('patient') }}'" class="card bg-gray-700 hover:bg-gray-600 transition text-white w-full h-1/6 absolute bottom-0 ">Show table</button>
                </div>

                <div class="card bg-white shadow h-auto w-auto rounded-2xl overflow-hidden relative">
                    <h1 class="shadow-md text-l font-bold text-center text-gray-600 uppercase p-3">Patient Checkout</h1>
                    <img class="py-6 transform scale-125" src="{{ asset('img/checkout.jpg') }}" alt="" />
                    <button onclick="location.href='{{ route('receipt') }}'" class="card bg-gray-700 hover:bg-gray-600 transition text-white w-full h-1/6 absolute bottom-0 ">Show table</button>
                </div>
            </div>
        </div>
    </div>
@endsection
