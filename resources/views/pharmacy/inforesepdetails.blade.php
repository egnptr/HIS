@extends('pharmacy/layout/main')

@section('title', 'inforesepdetails')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <h1>Master Resep</h1>
                <div class="page-title">
                    <h1></h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li>
                            <a href="#">Master resep</a>
                        </li>
                        <li class = "active"><a href="#">Informasi resep</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
          <div class="flex justify-center">
        <div class="w-8/12">
            <div class="p-6">
                 @foreach ($inforesepdetails as $item)
                 @endforeach
                 @foreach ($patient as $items)
                 
                <h1 class="text-2xl font-semibold mb-1">{{ $item ->Patients }}</h1>
                <span class="bg-indigo-500 text-white font-bold py-1 px-4 rounded">PIN: HIS01-{{ $items->dob }}-{{ $items->ktp }}</span>
                <span class="bg-indigo-500 text-white font-bold py-1 px-4 rounded">KTP: {{ $items->ktp }}</span>
            </div>

            <div class="bg-white p-6 rounded-lg">
                <div class="-my-8 divide-y-2 divide-gray-100">
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">Patients</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $item ->Doctors }}</p>
                        </div>
                    </div>
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">Obat 1</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $item ->Obat_1 }}</p>
                        </div>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">Dosis Obat 1</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $item ->Dosis_Obat_1 }}</p>
                        </div>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">Obat 2</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $item ->Obat_2 }}</p>
                        </div>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">Dosis Obat 2</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $item ->Dosis_Obat_2 }}</p>
                        </div>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">Obat 3</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $item ->Obat_3 }}</p>
                        </div>
                    </div>
                    
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">Dosis Obat 3</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $item ->Dosis_Obat_3 }}</p>
                        </div>
                    </div>
                    
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">Obat 4</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $item ->Obat_4 }}</p>
                        </div>
                    </div>
                    
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">Dosis Obat 4</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $item ->Dosis_Obat_4 }}</p>
                        </div>
                    </div>
                    
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">Obat 5</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $item ->Obat_5 }}</p>
                        </div>
                    </div>
                    
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">Dosis Obat 5</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $item ->Dosis_Obat_5 }}</p>
                        </div>
                    </div>
@endforeach
                </div>
            </div>
            
         </div>
    </div>
    
@endsection



                
