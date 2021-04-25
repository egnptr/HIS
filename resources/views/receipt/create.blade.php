@extends('layout.app')

@section('content')
<div class="flex flex-col h-screen">
    <div class="grid place-items-center mx-2 my-20 sm:my-auto">
        <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12
        px-6 py-10 sm:px-10 sm:py-6
        bg-white rounded-lg shadow-md lg:shadow-lg">
            <h2 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">
                Create Receipt
            </h2>

            <form method="POST" action="{{ route('receipt.create') }}">
                @csrf
                <div class="bg-white sm:p-6">
                    <label for="patient_name" class="block text-xs font-semibold text-gray-600 uppercase">Patient Name</label>
                    <select id="patient_name" name="patient_name" class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100">
                        <option value="" selected require>Choose a patient</option>
                        @foreach ($patients as $patient)
                            <option>
                                {{ $patient->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('patient_name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="bg-white sm:p-6">
                    <label for="doctor_name" class="block text-xs font-semibold text-gray-600 uppercase">Doctor Name</label>
                    <select id="doctor_name" name="doctor_name" class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100">
                        <option value="" selected require>Choose a doctor</option>
                        @foreach ($doctors as $doctor)
                            <option>
                                {{ $doctor->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('doctor_name')
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
                    <label for="date_out" class="block text-xs font-semibold text-gray-600 uppercase">Date Out</label>
                    <input id="date_out" type="date" name="date_out"
                        class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        onchange="cal()"
                        />
                    @error('date_out')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div id="days" value=""></div>

                <div class="bg-white sm:p-6">
                    <label for="room_type" class="block text-xs font-semibold text-gray-600 uppercase">Room Type</label>
                    <select id="room_type" name="room_type" class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100">
                        <option value="" selected require>Choose a room</option>
                        @foreach ($rooms as $room)
                            <option value="{{ $room->room_name }}">
                                {{ $room->room_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('room_type')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="bg-white sm:p-6">
                    <label for="room_fee" class="block text-xs font-semibold text-gray-600 uppercase">Room Fee</label>
                    <input id="room_fee" type="number" name="room_fee"
                        class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        value="0"
                        disabled
                        />
                    @error('room_fee')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="bg-white sm:p-6">
                    <label for="medicine_cost" class="block text-xs font-semibold text-gray-600 uppercase">Medicine Cost</label>
                    <select id="medicine_cost" name="medicine_cost" class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none border-b-2 border-gray-100"
                        onchange="cost()">
                        <option value="" selected require>Choose a medicine</option>
                        @foreach ($medicines as $medicine)
                            <option value="{{ $medicine->Harga_Jual }}">
                                {{ $medicine->Nama_Obat }} - {{ $medicine->Harga_Jual }}
                            </option>
                        @endforeach
                    </select>
                    @error('medicine_cost')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="bg-white sm:p-6">
                    <label for="consumption_cost" class="block text-xs font-semibold text-gray-600 uppercase">Consumption Cost</label>
                    <input id="consumption_cost" type="number" name="consumption_cost"
                        class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        value="0"
                        onchange="cost()"
                        />
                    @error('consumption_cost')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="bg-white sm:p-6">
                    <label for="lab_cost" class="block text-xs font-semibold text-gray-600 uppercase">Lab Cost</label>
                    <input id="lab_cost" type="number" name="lab_cost"
                        class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        value="0"
                        onchange="cost()"
                        />
                    @error('lab_cost')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="bg-white sm:p-6">
                    <label for="radiology_cost" class="block text-xs font-semibold text-gray-600 uppercase">Radiology Cost</label>
                    <input id="radiology_cost" type="number" name="radiology_cost"
                        class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        value="0"
                        onchange="cost()"
                        />
                    @error('radiology_cost')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="bg-white sm:p-6">
                    <label for="room_cost" class="block text-xs font-semibold text-gray-600 uppercase">Room Cost</label>
                    <input id="room_cost" type="number" name="room_cost"
                        class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        value="0"
                        readonly
                        />
                    @error('room_cost')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="bg-white sm:p-6">
                    <label for="maintenance_cost" class="block text-xs font-semibold text-gray-600 uppercase">Service Cost</label>
                    <input id="maintenance_cost" type="number" name="maintenance_cost"
                        class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        value="0"
                        readonly
                        />
                    @error('maintenance_cost')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="bg-white sm:p-6">
                    <label for="total_cost" class="block text-xs font-semibold text-gray-600 uppercase">Total Cost</label>
                    <input id="total_cost" type="number" name="total_cost"
                        class="block w-full py-3 px-1 mt-2
                        text-gray-800 appearance-none
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        value="0"
                        readonly
                        />
                    @error('total_cost')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="flex items-center justify-end px-4 py-3 space-x-4 sm:px-6">
                    <a href="{{ route('receipt') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    $( "#room_type" ).change(function() {
        $.ajax({
            type: "GET",
            url: '{{ route('room.getcost') }}',
            data: { room_type: $("#room_type").val() },
            dataType: 'json',
            success: function(data) {
                $("#room_fee").val(data[0].cost);
            },
            error: function(err) {
                console.log(err);
            }
        });
    });

    function day() {
        var checkout = new Date(document.getElementById("date_out").value);
        var checkin = new Date(document.getElementById("date_in").value);
        return parseInt((checkout - checkin) / (24 * 3600 * 1000));
    }

    function cal() {
        if (document.getElementById("date_out")) {
            document.getElementById("days").value = day();
        }
    }

    function cost() {
        var lab = parseInt(document.getElementById('lab_cost').value);
        var radio = parseInt(document.getElementById('radiology_cost').value);
        var medicine = parseInt(document.getElementById('medicine_cost').value);
        var consumption = parseInt(document.getElementById('consumption_cost').value);

        var fee = parseInt(document.getElementById('room_fee').value);
        var days = parseInt(document.getElementById('days').value);

        var room_cost = fee * days;
        document.getElementById('room_cost').value = room_cost;

        var maintenance_cost = lab + radio + medicine + consumption;
        document.getElementById('maintenance_cost').value = maintenance_cost;

        var total_cost = maintenance_cost + room_cost;
        document.getElementById('total_cost').value = total_cost;
    }
</script>
@endsection
