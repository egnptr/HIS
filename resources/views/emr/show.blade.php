@extends('layout.app')

@section('title')
<title>{{$patient->name}}'s EMR</title>
@endsection

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12">
            <div class="p-6">
                <h1 class="text-2xl font-semibold mb-1">{{$patient->name}}</h1>
                <h1 class="text-xl font-semibold mb-1">Last Updated At: {{$emr->first()->updated_at}}</h1>
            </div>

            <div class="p-6">
                <h1 class="font-semibold">Vital Signs</h1>
            </div>
            
            <div class="bg-white p-6 rounded-lg">
                <div class="-my-8 divide-y-2 divide-gray-100">
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">Blood Pressure</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $emr->first()->blood_pressure }}</p>
                        </div>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">Heart Rate</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $emr->first()->heart_rate }}</p>
                        </div>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">Blood Sugar Level</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $emr->first()->blood_sugar }}</p>
                        </div>
                    </div>
                    
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">Height</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $emr->first()->height }}</p>
                        </div>
                    </div>
                    
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">Weight</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $emr->first()->weight }}</p>
                        </div>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">Image</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">
                                <img width="150px" src="{{ url('/data_file/'.$emr->first()->file) }}">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="p-6">
                <h1 class="font-semibold">Diagnosis based on Case ID {{ $emr->first()->id_cin }}</h1>
            </div>
            
            <div class="bg-white p-6 rounded-lg">
                <div class="-my-8 divide-y-2 divide-gray-100">
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">Diagnosis</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $emr->first()->diagnosis }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex p-6 space-x-4">
                <a href="{{ route('emr.edit', $patient) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                <a href="{{ url()->previous() }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Back to list</a>
            </div>

        </div>
    </div>
@endsection
