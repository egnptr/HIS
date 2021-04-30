@extends('layout.app')



@section('title')

<title>Radiology Payment</title>

@endsection



@section('content')

    <div class="flex justify-center">

        <div class="w-8/12">

            <div class="p-6">

                <h1 class="text-2xl font-semibold mb-1">{{ $patient->name }}</h1>

                <span class="bg-indigo-500 text-white font-bold py-1 px-4 rounded">PIN: HIS01-{{ $patient->dob }}-{{ $patient->ktp }}</span>

                <span class="bg-indigo-500 text-white font-bold py-1 px-4 rounded">KTP: {{ $patient->ktp }}</span>

            </div>
                    
                    <div class="py-8 flex flex-wrap md:flex-nowrap">

                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">

                            <span class="font-semibold title-font text-gray-700">Scanning Tool Cost</span>

                        </div>

                        <div class="md:flex-grow">
                            @php
                                $i = 0;
                                foreach ($scanning_tool as $key => $value):
                            @endphp    
                                <p class="leading-relaxed">Rp. {{ $scanning_tool_cost[$i] }} ({{ $scanning_tool[$i] }})</p>
                            @php
                                    $i++;
                                endforeach
                            @endphp
                        </div>

                    </div>


                </div>

            </div>



            <div class="flex items-center justify-end px-4 py-3 space-x-4 sm:px-6">
            
                            <form method="POST" action="{{ route('Radiologi.finish', [$patient, $scanning_tool_cost, $scanning_tool, $total_cost]) }}">
            
                               
            
                                <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
            
                                    Finish Payment
            
                                </button>
            
                            </form>
            
                            <a href="{{ route('Radiologi.list') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Back to list</a>
            
                        </div>



        </div>

    </div>

@endsection