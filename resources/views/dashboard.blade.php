@extends('layout.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-3/4 bg-white p-9 rounded-lg">
            <div class="px-6 py-4 bg-white border-b border-gray-200 font-bold uppercase">
                Dashboard
            </div>

            <div class="container mx-auto mt-10 grid grid-cols-1 gap-8 md:grid-cols-3 xl:grid-cols-3">
                @can('admin')
                    <div class="card bg-white shadow h-auto w-auto rounded-2xl overflow-hidden relative">
                        <h1 class="shadow-md text-l font-bold text-center text-gray-600 uppercase p-3">Doctor List</h1>
                        <img class="py-2 transform scale-110" src="{{ asset('img/doctor.jpeg') }}" alt="" />
                        <button onclick="location.href='{{ route('doctor') }}'" class="card bg-gray-700 hover:bg-gray-600 transition text-white w-full h-1/6 absolute bottom-0 ">Show table</button>
                    </div>
                @endcan

                @can('admin')
                    <div class="card bg-white shadow h-auto w-auto rounded-2xl overflow-hidden relative">
                        <h1 class="shadow-md text-l font-bold text-center text-gray-600 uppercase p-3">Bridging</h1>
                        <img class="py-2 transform scale-110" src="{{ asset('img/doctor.jpeg') }}" alt="" />
                        <button onclick="location.href='{{ route('api') }}'" class="card bg-gray-700 hover:bg-gray-600 transition text-white w-full h-1/6 absolute bottom-0 ">Show table</button>
                    </div>
                @endcan

                @cannot('staff')
                    <div class="card bg-white shadow h-auto w-auto rounded-2xl overflow-hidden relative">
                        <h1 class="shadow-md text-l font-bold text-center text-gray-600 uppercase p-3">Patient List</h1>
                        <img class="py-10 transform scale-150" src="{{ asset('img/patient.jpg') }}" alt="" />
                        <button onclick="location.href='{{ route('patient') }}'" class="card bg-gray-700 hover:bg-gray-600 transition text-white w-full h-1/6 absolute bottom-0 ">Show table</button>
                    </div>
                @endcannot

                @cannot('staff')
                    <div class="card bg-white shadow h-auto w-auto rounded-2xl overflow-hidden relative">
                        <h1 class="shadow-md text-l font-bold text-center text-gray-600 uppercase p-3">Inpatient</h1>
                        <img class="py-10 transform scale-150" src="{{ asset('img/patient.jpg') }}" alt="" />
                        <button onclick="location.href='{{ route('homeInpatient') }}'" class="card bg-gray-700 hover:bg-gray-600 transition text-white w-full h-1/6 absolute bottom-0 ">Show table</button>
                    </div>
                @endcannot

                @cannot('staff')
                    <div class="card bg-white shadow h-auto w-auto rounded-2xl overflow-hidden relative">
                        <h1 class="shadow-md text-l font-bold text-center text-gray-600 uppercase p-3">Outpatient</h1>
                        <img class="py-10 transform scale-150" src="{{ asset('img/patient.jpg') }}" alt="" />
                        <button onclick="location.href='{{ route('outpatient') }}'" class="card bg-gray-700 hover:bg-gray-600 transition text-white w-full h-1/6 absolute bottom-0 ">Show table</button>
                    </div>
                @endcannot

                @canany(['admin', 'staff'])
                <div class="card bg-white shadow h-auto w-auto rounded-2xl overflow-hidden relative">
                    <h1 class="shadow-md text-l font-bold text-center text-gray-600 uppercase p-3">Pharmacy</h1>
                    <img class="py-6 transform scale-125" src="{{ asset('img/pharmacy.jpeg') }}" alt="" />
                    <button onclick="location.href='{{ route('pharmacy') }}'" class="card bg-gray-700 hover:bg-gray-600 transition text-white w-full h-1/6 absolute bottom-0 ">Show table</button>
                </div>
                @endcanany

                @canany(['admin', 'staff'])
                <div class="card bg-white shadow h-auto w-auto rounded-2xl overflow-hidden relative">
                    <h1 class="shadow-md text-l font-bold text-center text-gray-600 uppercase p-3">Patient Checkout</h1>
                    <img class="py-6 transform scale-125" src="{{ asset('img/checkout.jpg') }}" alt="" />
                    <button onclick="location.href='{{ route('receipt') }}'" class="card bg-gray-700 hover:bg-gray-600 transition text-white w-full h-1/6 absolute bottom-0 ">Show table</button>
                </div>
                @endcanany

            </div>
        </div>
    </div>
@endsection
