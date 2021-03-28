@extends('inpatient/layout/main')

@section('title', 'Inpatient - Homepage')

@section('navbar-nav')
    <li class="nav-item mx-2">
        <a class="nav-link active" aria-current="page">Home</a>
    </li>
    <li class="nav-item mx-2">
        <a class="nav-link" href="{{ route('inpatientPatient') }}">Dashboard</a>
    </li>
@endsection

@section('container')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/img/inpatient/hospital1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/img/inpatient/hospital2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/img/inpatient/hospital3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-sm d-flex justify-content-end">
                <img src="/img/inpatient/hospital-logo.png" width=200>
            </div>
            <div class="col-sm d-flex justify-content-start text-center">
                <h4 class="my-auto">HIS terletak di Jl. M. H. Thamrin Boulevard 1100 Lippo Village Tangerang 15811 - Indonesia</h1>
            </div>
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-sm d-flex justify-content-end text-center">
                <h4 class="my-auto">Karyawan kami terdiri dari 100 orang (20 Dokter, 40 Suster, 40 Lainnya)</h1>
            </div>
            <div class="col-sm d-flex justify-content-start">
                <img src="/img/inpatient/staff-logo.png" width=200>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
@endsection