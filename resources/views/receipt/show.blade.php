@extends('layout.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12">
            <div class="p-6">
                <h1 class="text-2xl font-semibold mb-1">{{ $receipt->patient_name }}</h1>
            </div>
            
            <div class="bg-white p-6 rounded-lg">
                <div class="-my-8 divide-y-2 divide-gray-100">
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">Type</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $receipt->type }}</p>
                        </div>
                    </div>
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">DOCTOR'S NAME</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $receipt->doctor_name }}</p>
                        </div>
                    </div>

                    <!--<div class="py-8 flex flex-wrap md:flex-nowrap">-->
                    <!--    <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">-->
                    <!--        <span class="font-semibold title-font text-gray-700">DATE</span>-->
                    <!--    </div>-->
                    <!--    <div class="md:flex-grow">-->
                    <!--        <span class="font-mono font-mono font-light">In</span>-->
                    <!--        <p class="leading-relaxed">{{ $receipt->date_in }}</p>-->
                    <!--    </div>-->
                    <!--    <div class="md:flex-grow">-->
                    <!--        <span class="font-mono font-light">Out</span>-->
                    <!--        <p class="leading-relaxed">{{ $receipt->date_out }}</p>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="py-8 flex flex-wrap md:flex-nowrap">-->
                    <!--    <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">-->
                    <!--        <span class="font-semibold title-font text-gray-700">ROOM TYPE</span>-->
                    <!--    </div>-->
                    <!--    <div class="md:flex-grow">-->
                    <!--        <p class="leading-relaxed">{{ $receipt->room_type }}</p>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">Cost</span>
                        </div>
                        <div class="md:flex-grow">
                            <span class="font-mono font-light">Room</span>
                            <p class="leading-relaxed">
                                <b>Rp </b> 
                                {{ number_format($receipt->room_cost) }}
                            </p>
                        </div>
                        <div class="md:flex-grow">
                            <span class="font-mono font-light">Service Cost</span>
                            <p class="leading-relaxed">
                                <b>Rp </b> 
                                {{ number_format($receipt->service_cost) }}
                            </p>
                        </div>
                        <div class="md:flex-grow">
                            <span class="font-mono font-light">Medicine</span>
                            <p class="leading-relaxed">
                                <b>Rp </b> 
                                {{ number_format($receipt->medicine_cost) }}
                            </p>
                        </div>
                        <div class="md:flex-grow">
                            <span class="font-mono font-light">Consumption</span>
                            <p class="leading-relaxed">
                                <b>Rp </b> 
                                {{ number_format($receipt->consumption_cost) }}
                            </p>
                        </div>
                        <div class="md:flex-grow">
                            <span class="font-mono font-light">Laboratory</span>
                            <p class="leading-relaxed">
                                <b>Rp </b> 
                                {{ number_format($receipt->lab_cost) }}
                            </p>
                        </div>
                        <div class="md:flex-grow">
                            <span class="font-mono font-light">Radiology</span>
                            <p class="leading-relaxed">
                                <b>Rp </b> 
                                {{ number_format($receipt->radiology_cost) }}
                            </p>
                        </div>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">TOTAL COST</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">
                                <b>Rp </b> 
                                {{ number_format($receipt->total_cost) }}
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="flex p-6">
                <a href="{{ route('receipt') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Back to list</a>
            </div>

        </div>
    </div>
@endsection