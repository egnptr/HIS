@extends('layout.app')

@section('content')
<div class="flex flex-col h-screen">
    <div class="grid place-items-center mx-2 my-20 sm:my-auto">
        <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12
        px-6 py-10 sm:px-10 sm:py-6
        bg-white rounded-lg shadow-md lg:shadow-lg">
            <h2 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">
                Create 
            </h2>

            <form method="POST" action="{{ route('operating_theatre.create') }}">
                @csrf
                <div class="bg-white sm:p-6">
                    <label for="id_patient" class="block text-xs font-semibold text-gray-600 uppercase">Patient Name</label>
                    <select id="id_patient" name="id_patient" class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100">
                        <option value="" selected require>Choose a patient</option>
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

                <div class="bg-white sm:p-6">
                    <label for="id_doctor" class="block text-xs font-semibold text-gray-600 uppercase">Doctor Name</label>
                    <select id="id_doctor" name="id_doctor" class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100">
                        <option value="" selected require>Choose a doctor</option>
                        @foreach ($doctors as $doctor)
                            <option value="{{ $doctor->id }}">
                                {{ $doctor->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_doctor')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="bg-white sm:p-6">
                    <label for="date_in" class="block text-xs font-semibold text-gray-600 uppercase">Date In</label>
                    <input id="date_in" type="date" name="date_in"
                        class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        onchange="cal()"
                        />
                    @error('date_in')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="bg-white sm:p-6">
                    <label for="group_case" class="block text-xs font-semibold text-gray-600 uppercase">Group Case</label>
                    <select id="group_case" name="group_case" class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100">
                        <option value="" selected require>Choose a group case</option>
                        @foreach ($group_cases as $group_case)
                            <option value="{{ $group_case->id }}">
                                {{ $group_case->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('group_case')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="bg-white sm:p-6">
                    <label for="case_detail" class="block text-xs font-semibold text-gray-600 uppercase">Case Detail</label>
                    <input id="case_detail" type="text" name="case_detail" placeholder="Enter case_detail..."
                        class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        />
                    @error('case_detail')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="bg-white sm:p-6">
                    <label for="room" class="block text-xs font-semibold text-gray-600 uppercase">Room</label>
                    <select id="room" name="room" class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100">
                        <option value="" selected require>Choose a room</option>
                        @foreach ($rooms as $room)
                            <option value="{{ $room->id }}">
                                {{ $room->room_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('room')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                

                <input id="type" type="text" name="type" value="operating_theatre" hidden/>
                <input id="status" type="text" name="status" value="Ongoing" hidden/>

                <div class="flex items-center justify-end px-4 py-3 space-x-4 sm:px-6">
                    <a href="{{ route('operating_theatre.patient') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        Back to list
                    </a>
                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection