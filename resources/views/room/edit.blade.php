@extends('layout.app')

@section('content')
<div class="flex flex-col h-screen">
    <div class="grid place-items-center mx-2 my-20 sm:my-auto">
        <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12
        px-6 py-10 sm:px-10 sm:py-6
        bg-white rounded-lg shadow-md lg:shadow-lg">
            <h2 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">
                Edit Room
            </h2>

            <form method="POST" action="{{ route('room.edit', $room) }}">
                @csrf
                <div class="bg-white sm:p-6">
                    <label for="status" class="block text-xs font-semibold text-gray-600 uppercase">Status</label>
                    <select id="status" name="status" class="block w-1/2 py-3 px-1 mt-2
                        text-gray-800 border-b-2">
                        <option value="{{ $room->status }}" selected require>{{ $room->status }}</option>
                        <option value="Available">Available</option>
                        <option value="Not Available">Not Available</option>
                    </select>
                    @error('status')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="bg-white sm:p-6">
                    <label for="nurse_in_charge" class="block text-xs font-semibold text-gray-600 uppercase">Nurse in Charge</label>
                    <select id="nurse_in_charge" name="nurse_in_charge" class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100">
                        <option value="{{ $room->nurse_in_charge }}" selected require>{{ $room->nurse_in_charge }}</option>
                        @foreach ($nurses as $nurse)
                            <option value="{{ $nurse->id }}">
                                {{ $nurse->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('nurse_in_charge')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="bg-white sm:p-6">
                    <label for="id_patient" class="block text-xs font-semibold text-gray-600 uppercase">Patient Name</label>
                    <select id="id_patient" name="id_patient" class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100">
                        <option value="{{ $room->id_patient }}" selected require>{{ $room->id_patient }}</option>
                        @foreach ($patients as $patient)
                            <option value="{{ $patient->id }}">
                                {{ $patient->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_patient')
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
