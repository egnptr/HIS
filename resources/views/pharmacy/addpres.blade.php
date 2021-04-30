@extends('pharmacy/layout/main')

@section('title', 'inforesep')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <h1>Master resep</h1>
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
                        <li class = "active"><a href="#">Tambah Informasi resep</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class = "card">
                <div class="card-header">
                   <div class="pull-left">
                        <strong>Tambah Informasi resep</strong>   
                    </div> 
                    <div class="pull-right">
                        <a href="{{ url('inforesep') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                
                    <div class="row">
                    <div class="col-md-4 offset-md-4">
                    <form action="{{ url ('inforesep') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nama Dokter</label>
                            <select id="Doctors" name="Doctors" class="form-control" required>
                                <option value="" selected require>Choose a doctor</option>
                        @foreach ($doctors as $doctor)
                            <option value="{{ $doctor->name }}">
                                {{ $doctor->name }}
                            </option>
                        @endforeach
                    </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Pasien</label>
                            <select id="Patients" name="Patients" class="form-control" required>
                                <option value="" selected require>Choose a patient</option>
                        @foreach ($patients as $patient)
                            <option value="{{ $patient->name }}">
                                {{ $patient->name }}
                            </option>
                        @endforeach
                    </select>
                        </div>
                        <div class="form-group">
                            <label>Obat 1</label>
                            <select id="Obat_1" name="Obat_1" class="form-control" required>
                                <option value="" selected require>Choose Medicine</option>
                        @foreach ($obat as $Nama_Obat)
                            <option value="{{ $Nama_Obat }}">
                                {{ $Nama_Obat }}
                            </option>
                        @endforeach
                    </select>
                        <div class="form-group">
                            <label>Dosis Obat 1</label>
                            <input type="number" name="Dosis_Obat_1" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Obat 2</label>
                            <select id="Obat_2" name="Obat_2" class="form-control" >
                                <option value="" selected require>Choose Medicine</option>
                        @foreach ($obat as $Nama_Obat)
                            <option value="{{ $Nama_Obat }}">
                                {{ $Nama_Obat }}
                            </option>
                        @endforeach
                    </select>
                        <div class="form-group">
                            <label>Dosis Obat 2</label>
                            <input type="number" name="Dosis_Obat_2" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Obat 3</label>
                            <select id="Obat_3" name="Obat_3" class="form-control" >
                                <option value="" selected require>Choose Medicine</option>
                        @foreach ($obat as $Nama_Obat)
                            <option value="{{ $Nama_Obat }}">
                                {{ $Nama_Obat }}
                            </option>
                        @endforeach
                    </select>
                        
                        <div class="form-group">
                            <label>Dosis Obat 3</label>
                            <input type="number" name="Dosis_Obat_3" class="form-control" >  
                        </div>
                        <div class="form-group">
                            <label>Obat 4</label>
                            <select id="Obat_4" name="Obat_4"class="form-control" >
                                <option value="" selected require>Choose Medicine</option>
                        @foreach ($obat as $Nama_Obat)
                            <option value="{{ $Nama_Obat }}">
                                {{ $Nama_Obat }}
                            </option>
                        @endforeach
                    </select>
                        <div class="form-group">
                            <label>Dosis Obat 4</label>
                            <input type="number" name="Dosis_Obat_4" class="form-control" >
                        </div>
                        
                        <div class="form-group">
                            <label>Obat 5</label>
                            <select id="Obat_5" name="obat5"class="form-control" >
                                <option value="" selected require>Choose Medicine</option>
                        @foreach ($obat as $Nama_Obat)
                            <option value="{{ $Nama_Obat }}">
                                {{ $Nama_Obat }}
                            </option>
                        @endforeach
                    </select>
                        
                        <div class="form-group">
                            <label>Dosis Obat 5</label>
                            <input type="number" name="Dosis_Obat_5" class="form-control" >
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                    </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div>  
@endsection