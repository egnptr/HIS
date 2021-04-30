@extends('pharmacy/layout/main')

@section('title', 'inforan')

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
                        <li class = "active"><a href="#">Informasi Tebus Obat</a></li>
                        <li class = "active"><a href="#">Edit Informasi Tebus Obat</a></li>
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
                        <strong>Edit Tebus Obat</strong>   
                    </div> 
                    <div class="pull-right">
                        <a href="{{ url('inforan') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                
                    <div class="row">
                    <div class="col-md-4 offset-md-4">
                    <form action="{{ url ('inforan/' .$edited->id) }}" method="POST">
                        @method('patch')
                        @csrf                       
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
                            <label>Harga_Obat_1</label>
                            <input type="int" name="Harga_Obat_1" class="form-control" value="{{ $harga1 }}">
                        
                       
                        
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
                            <label>Harga_Obat_2</label>
                            <input type="int" name="Harga_Obat_2" class="form-control" value="{{ $harga2 }}">
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
                            <label>Harga_Obat_3</label>
                            <input type="int" name="Harga_Obat_3" class="form-control" value="{{ $harga3 }}">
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
                            <label>Harga_Obat_4</label>
                            <input type="int" name="Harga_Obat_4" class="form-control" value="{{ $harga4 }}">
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
                        
                        <div class="form-group">
                            <label>Harga_Obat_5</label>
                            <input type="int" name="Harga_Obat_5" class="form-control" value="{{ $harga5 }}">
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