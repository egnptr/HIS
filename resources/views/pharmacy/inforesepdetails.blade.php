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
                            <a href="#">Master Resep</a>
                        </li>
                        <li class = "active"><a href="#">Informasi Resep</a></li>
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
                <h1 class="text-2xl font-semibold mb-1" align="center">{{ $item ->Patients }}</h1>
                <span class="content mt-3" style="border:1px solid blue;text-align:center">PIN: HIS01-{{ $items->dob }}-{{ $items->ktp }}</span>
                <span class="content mt-3" style="border:1px solid blue;text-align:center">KTP: {{ $items->ktp }}</span>
            </div>

            <div class="card-body table-responsive">
                <table class = "table table-striped">
                    <thead>
                        <tr>
                            <th>DETAIL RESEP OBAT</th>
                        </tr> 
                    </thead>
            <tbody>
            <div class="bg-white p-6 rounded-lg">
                <div class="-my-8 divide-y-2 divide-gray-100">
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <tr><div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <td><span class="font-semibold title-font text-blue-500">Doctor</span></td>
                        </div>
                        <div class="md:flex-grow">
                            <td><p style="color:#02686f">{{ $item ->Doctors }}</p></td>
                        </div></tr>
                    </div>
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <tr><div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <td><span class="font-semibold title-font text-gray-700">Obat 1</span></td>
                        </div>
                        <div class="md:flex-grow">
                            <td><p style="color:#02686f">{{ $item ->Obat_1 }}</p></td>
                        </div>
                        </tr>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <tr><div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <td><span class="font-semibold title-font text-gray-700">Dosis Obat 1</span></td>
                        </div>
                        <div class="md:flex-grow">
                            <td><p style="color:#02686f">{{ $item ->Dosis_Obat_1 }}</p></td>
                        </div>
                        </tr>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <tr><div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <td><span class="font-semibold title-font text-gray-700">Obat 2</span></td>
                        </div>
                        <div class="md:flex-grow">
                            <td><p style="color:#02686f"><?php
                                                        if($item->Obat_2 == null) {
                                                         echo ('-');
                                                        }?>
                                                        <?php
                                                        if($item->Obat_2 != null) {?>
                                                            {{ $item ->Obat_2 }}
                                                        <?php }?> </p></td>
                        </div>
                        </tr>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <tr><div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <td><span class="font-semibold title-font text-gray-700">Dosis Obat 2</span></td>
                        </div>
                        <div class="md:flex-grow">
                            <td><p style="color:#02686f"><?php
                                                        if($item->Dosis_Obat_2 == null) {
                                                         echo ('-');
                                                        }?>
                                                        <?php
                                                        if($item->Dosis_Obat_2 != null) {?>
                                                            {{ $item ->Dosis_Obat_2 }}
                                                        <?php }?> </p></td>
                                                        
                            
                        </div>
                        </tr>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <tr><div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <td><span class="font-semibold title-font text-gray-700">Obat 3</span></td>
                        </div>
                        <div class="md:flex-grow">
                            <td><p style="color:#02686f"><?php
                                                        if($item->Obat_3 == null) {
                                                         echo ('-');
                                                        }?>
                                                        <?php
                                                        if($item->Obat_3 != null) {?>
                                                            {{ $item ->Obat_3 }}
                                                        <?php }?> </p></td>
                        </div>
                        </tr>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <tr><div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <td><span class="font-semibold title-font text-gray-700">Dosis Obat 3</span></td>
                        </div>
                        <div class="md:flex-grow">
                            <td><p style="color:#02686f"><?php
                                                        if($item->Dosis_Obat_3 == null) {
                                                         echo ('-');
                                                        }?>
                                                        <?php
                                                        if($item->Dosis_Obat_3 != null) {?>
                                                            {{ $item ->Dosis_Obat_3 }}
                                                        <?php }?> </p></td>
                                                        
                            
                        </div>
                        </tr>
                    </div>
                    
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <tr><div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <td><span class="font-semibold title-font text-gray-700">Obat 4</span></td>
                        </div>
                        <div class="md:flex-grow">
                            <td><p style="color:#02686f"><?php
                                                        if($item->Obat_4 == null) {
                                                         echo ('-');
                                                        }?>
                                                        <?php
                                                        if($item->Obat_4 != null) {?>
                                                            {{ $item ->Obat_4 }}
                                                        <?php }?> </p></td>
                        </div>
                        </tr>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <tr><div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <td><span class="font-semibold title-font text-gray-700">Dosis Obat 4</span></td>
                        </div>
                        <div class="md:flex-grow">
                            <td><p style="color:#02686f"><?php
                                                        if($item->Dosis_Obat_4 == null) {
                                                         echo ('-');
                                                        }?>
                                                        <?php
                                                        if($item->Dosis_Obat_4 != null) {?>
                                                            {{ $item ->Dosis_Obat_4 }}
                                                        <?php }?> </p></td>
                                                        
                            
                        </div>
                        </tr>
                    </div>
                    
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <tr><div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <td><span class="font-semibold title-font text-gray-700">Obat 5</span></td>
                        </div>
                        <div class="md:flex-grow">
                            <td><p style="color:#02686f"><?php
                                                        if($item->Obat_5 == null) {
                                                         echo ('-');
                                                        }?>
                                                        <?php
                                                        if($item->Obat_5 != null) {?>
                                                            {{ $item ->Obat_5 }}
                                                        <?php }?> </p></td>
                        </div>
                        </tr>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <tr><div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <td><span class="font-semibold title-font text-gray-700">Dosis Obat 5</span></td>
                        </div>
                        <div class="md:flex-grow">
                            <td><p style="color:#02686f"><?php
                                                        if($item->Dosis_Obat_5 == null) {
                                                         echo ('-');
                                                        }?>
                                                        <?php
                                                        if($item->Dosis_Obat_5 != null) {?>
                                                            {{ $item ->Dosis_Obat_5 }}
                                                        <?php }?> </p></td>
                                                        
                            
                        </div>
                        </tr>
                    </div>
@endforeach
                </div>
            </tbody>
            </table>
            </div>
            </div>
            
         </div>
    </div>
    
@endsection



                
