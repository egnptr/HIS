@extends('layout.app')

@section('title')
<title>Operating Theatre - Patient Details</title>
@endsection

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12">
            <div class="p-6">
                <h1 class="text-2xl font-semibold mb-1">{{ $patient->name }}</h1>
                <span class="bg-indigo-500 text-white font-bold py-1 px-4 rounded">PIN: HIS01-{{ $patient->dob }}-{{ $patient->ktp }}</span>
                <span class="bg-indigo-500 text-white font-bold py-1 px-4 rounded">KTP: {{ $patient->ktp }}</span>
            </div>

            <div class="bg-white p-6 rounded-lg">
                <div class="-my-8 divide-y-2 divide-gray-100">
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">Room</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">Room {{ $room->first()->id }} : Ward {{ $room->first()->ward }} - {{ $room->first()->type }}</p>
                        </div>
                    </div>
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">DATE OF BIRTH</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $patient->dob }}</p>
                        </div>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">SEX</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $patient->sex }}</p>
                        </div>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">EMAIL</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $patient->email }}</p>
                        </div>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">PHONE NUMBER</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $patient->phone }}</p>
                        </div>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">ADDRESS</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $patient->address }}</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="flex items-center justify-end px-4 py-3 space-x-4 sm:px-6">
                <a href="{{ route('emr.show', $patient) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View EMR</a>
                @can('admin')
                <a href="{{ route('operating_theatre.checkout', $patient) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Checkout</a>
                @endcan
                @can('nurse')
                <a href="{{ route('inpatient.orderfood', $patient) }}" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Order Food</a>
                @endcan
                <a href="{{ route('operating_theatre.patient') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Back to list</a>


        </div>
    </div>
@endsection