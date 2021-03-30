@extends('pharmacy/layout/main') 

@section('title', 'Dashboard')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>MENU</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Farmasi</a></li>
                        <li><a href="#">Menu</a></li>
                        {{-- <li class="active">Basic table</li> --}}
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="row">
<div class="col-md-6 col-sm-12 mb-2">
    <div class="m-5">
    <div style="text-align: center">
        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
            <div class="card-header">INFORMASI OBAT</div>
            <div class="card-body">
                <i class="menu-icon ti-clipboard" style="font-size:60px;"></i>
                <p></p>
                <button onclick="location.href='{{ url ('order') }}'" class="btn btn-light btn-sm btn-block">Lihat</button>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="col-sm-6">
    <div class="m-5">
    <div style="text-align: center">
        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
            <div class="card-header">PESAN OBAT</div>
            <div class="card-body">
                <i class="menu-icon ti-email" style="font-size:60px;"></i>
                <p></p>
                <button onclick="location.href='{{ url ('info') }}'" class="btn btn-light btn-sm btn-block">Lihat</button>
            </div>
        </div>
    </div>
    </div>
</div>

<div class="col-sm-6">
    <div class="m-5">
    <div style="text-align: center">
        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
            <div class="card-header">RESEP PASIEN</div>
            <div class="card-body">
                <i class="menu-icon fa fa-tasks" style="font-size:60px;"></i>
                <p></p>
                <button onclick="location.href='{{ url ('infopres') }}'" class="btn btn-light btn-sm btn-block">Lihat</button>
            </div>
        </div>
    </div>
    </div>
</div>

<div class="col-sm-6">
    <div class="m-5">
    <div style="text-align: center">
        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
            <div class="card-header">RESEP TEBUS OBAT</div>
            <div class="card-body">
                <i class="menu-icon fa fa-bar-chart" style="font-size:60px;"></i>
                <p></p>
                <button onclick="location.href='{{ url ('inforan') }}'" class="btn btn-light btn-sm btn-block">Lihat</button>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
@endsection