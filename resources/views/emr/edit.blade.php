@extends('layout.app')

@section('title')
<title>Edit {{ $patient->name }}'s EMR</title>
@endsection

@section('content')
<div class="flex flex-col h-screen">
    <div class="grid place-items-center mx-2">
        <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12
        px-6 py-10 sm:px-10 sm:py-6
        bg-white rounded-lg shadow-md lg:shadow-lg">
            <h2 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">
                {{ $patient->name }}'s EMR
            </h2>

            <form method="POST" action="{{ route('emr.edit', $patient) }}">
                @csrf
                <div class="bg-white sm:p-6">
                    <label for="blood_pressure" class="block text-xs font-semibold text-gray-600 uppercase">Blood Pressure</label>
                    <input id="blood_pressure" type="text" name="blood_pressure" placeholder="Enter blood pressure... "
                        class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        value="{{ $emr->first()->blood_pressure }}"
                        />
                    @error('blood_pressure')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="bg-white sm:p-6">
                    <label for="heart_rate" class="block text-xs font-semibold text-gray-600 uppercase">Heart Rate</label>
                    <input id="heart_rate" type="text" name="heart_rate" placeholder="Enter heart rate... "
                        class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        value="{{ $emr->first()->heart_rate }}"
                        />
                    @error('heart_rate')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="bg-white sm:p-6">
                    <label for="blood_sugar" class="block text-xs font-semibold text-gray-600 uppercase">Blood Sugar</label>
                    <input id="blood_sugar" type="text" name="blood_sugar" placeholder="Enter blood sugar... "
                        class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        value="{{ $emr->first()->blood_sugar }}"
                        />
                    @error('blood_sugar')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="bg-white sm:p-6">
                    <label for="height" class="block text-xs font-semibold text-gray-600 uppercase">Height</label>
                    <input id="height" type="text" name="height" placeholder="Enter height... "
                        class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        value="{{ $emr->first()->height }}"
                        />
                    @error('height')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="bg-white sm:p-6">
                    <label for="weight" class="block text-xs font-semibold text-gray-600 uppercase">Weight</label>
                    <input id="weight" type="text" name="weight" placeholder="Enter weight... "
                        class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        value="{{ $emr->first()->weight }}"
                        />
                    @error('weight')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="bg-white sm:p-6">
                    <label for="diagnosis" class="block text-xs font-semibold text-gray-600 uppercase">Diagnosis</label>
                    <input id="diagnosis" type="text" name="diagnosis" placeholder="Enter diagnosis... "
                        class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        value="{{ $emr->first()->diagnosis }}"
                        />
                    @error('diagnosis')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="flex items-center justify-end px-4 py-3 space-x-4 sm:px-6">
                    <a href="{{ url()->previous() }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        Back to list
                    </a>
                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection