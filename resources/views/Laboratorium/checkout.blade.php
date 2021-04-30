@extends('layout.app')



@section('title')

<title>Laboratory Payment</title>

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

                            <span class="font-semibold title-font text-gray-700">Laboratory Cost</span>

                        </div>

                        <div class="md:flex-grow">
                            @php
                                $for_data_scanning_lab = "";
                                $for_data_scanning_lab_cost = 0;
                                $i = 0;
                                foreach ($scanning_lab as $key => $value):
                                    $for_data_scanning_lab .= $scanning_lab[$i];
                                    $for_data_scanning_lab_cost += $scanning_lab_cost[$i];
                            @endphp    
                                <p class="leading-relaxed">Rp. {{ $scanning_lab_cost[$i] }} ({{ $scanning_lab[$i] }})</p>
                            @php
                                    $i++;
                                endforeach
                            @endphp
                        </div>

                    </div>

                    

                </div>

            </div>



            <div class="flex items-center justify-end px-4 py-3 space-x-4 sm:px-6">
            
                            <form method="POST" action="{{ route('Laboratorium.finish', [$patient, $for_data_scanning_lab_cost, $for_data_scanning_lab, $total_cost]) }}">
            
                               @csrf
            
                                <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
            
                                    Finish Payment
            
                                </button>
            
                            </form>
            
                            <a href="{{ route('Laboratorium.laboratorypatient') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Back to list</a>
            
                        </div>



        </div>

    </div>

@endsection