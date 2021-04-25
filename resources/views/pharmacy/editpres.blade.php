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
                        <li class = "active"><a href="#">Edit Informasi resep</a></li>
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
                        <strong>Edit resep</strong>   
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
                    <form action="{{ url ('inforesep/' .$edited->id) }}" method="POST">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label>Doctors</label> 
                            <<select id="Doctors" name="Doctors" class="form-control" value={{ $edited-> Doctors }}>
                            <option value={{ $edited-> Doctors }} selected require>{{ $edited-> Doctors }}</option>
                        @foreach ($doctors as $doctor)
                            <option value="{{ $doctor->name }}">
                                {{ $doctor->name }}
                            </option>
                        @endforeach
                    </select>
                        </div>
                        <div class="form-group">
                            <label>Patients</label>
                            <select id="Patients" name="Patients" class="form-control" value={{ $edited-> Patients }}>
                                <option value={{ $edited-> Patients }} selected require>{{ $edited-> Patients }}</option>
                        @foreach ($patients as $patient)
                            <option value="{{ $patient->name }}">
                                {{ $patient->name }}
                            </option>
                        @endforeach
                    </select>
                        </div>
                        <div class="form-group">
                            <label>Obat_1</label>
                            <select id="Obat_1" name="Obat_1" class="form-control" value={{ $edited-> Obat_1 }}>
                                <option value={{ $edited-> Obat_1 }} selected require>{{ $edited-> Obat_1 }}</option>
                        @foreach ($obat as $Nama_Obat)
                            <option value="{{ $Nama_Obat }}">
                                {{ $Nama_Obat }}
                            </option>
                        @endforeach
                    </select
                        <div class="form-group">
                            <label>Dosis_Obat_1</label>
                            <input type="number" name="Dosis_Obat_1" class="form-control" value={{ $edited-> Dosis_Obat_1 }}>
                        </div> 
                        <div class="form-group">
                            <label>Obat_2</label>
                            <select id="Obat_2" name="Obat_2" class="form-control" value={{ $edited-> Obat_2 }}>
                                <option value={{ $edited-> Obat_2 }}>{{ $edited-> Obat_2 }}</option>
                                <option value=""</option>
                        @foreach ($obat as $Nama_Obat)
                            <option value="{{ $Nama_Obat }}">
                                {{ $Nama_Obat }}
                            </option>
                        @endforeach
                    </select>
                        <div class="form-group">
                            <label>Dosis_Obat_2</label>
                            <input type="number" name="Dosis_Obat_2" class="form-control" value={{ $edited-> Dosis_Obat_2 }}>
                        </div>
                        <div class="form-group">
                            <label>Obat_3</label>
                            <select id="Obat_3" name="Obat_3" class="form-control" value={{ $edited-> Obat_3 }}>
                                <option value={{ $edited-> Obat_3 }} >{{ $edited-> Obat_3 }}</option>
                                <option value=""</option>
                        @foreach ($obat as $Nama_Obat)
                            <option value="{{ $Nama_Obat }}">
                                {{ $Nama_Obat }}
                            </option>
                        @endforeach
                    </select>
                        
                        <div class="form-group">
                            <label>Dosis_Obat_3</label>
                            <input type="number" name="Dosis_Obat_3" class="form-control" value={{ $edited-> Dosis_Obat_3 }}  >
                        </div>
                        <div class="form-group">
                            <label>Obat_4</label>
                            <select id="Obat_4" name="Obat_4" class="form-control" value={{ $edited-> Obat_4 }}>
                                <option value={{ $edited-> Obat_4 }} >{{ $edited-> Obat_4 }}</option>
                                <option value=""</option>
                        @foreach ($obat as $Nama_Obat)
                            <option value="{{ $Nama_Obat }}">
                                {{ $Nama_Obat }}
                            </option>
                        @endforeach
                    </select>
                        
                        <div class="form-group">
                            <label>Dosis_Obat_4</label>
                            <input type="number" name="Dosis_Obat_4" class="form-control" value={{ $edited-> Dosis_Obat_4 }}>
                        </div>
                        <div class="form-group">
                            <label>Obat_5</label>
                            <select id="Obat_5" name="Obat_5" class="form-control" value={{ $edited-> Obat_5 }}>
                                <option value={{ $edited-> Obat_5 }} >{{ $edited-> Obat_5 }}</option>
                                <option value=""</option>
                        @foreach ($obat as $Nama_Obat)
                            <option value="{{ $Nama_Obat }}">
                                {{ $Nama_Obat }}
                            </option>
                        @endforeach
                    </select>
                        
                        <div class="form-group">
                            <label>Dosis_Obat_5</label>
                            <input type="number" name="Dosis_Obat_5" class="form-control" value={{ $edited-> Dosis_Obat_5 }}>
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