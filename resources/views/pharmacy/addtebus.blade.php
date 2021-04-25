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
                        <li class = "active"><a href="#">Tambah Informasi Tebus Obat</a></li>
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
                        <strong>Tambah Informasi Tebus Obat</strong>   
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
                    <form action="{{ url ('inforan') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nomor Pasien</label>
                            <input type="number" name="Nomor_Pasien" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Pasien</label>
                            <input type="text" name="Nama_Pasien" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Keterangan Penebusan</label>
                            <select id="Keterangan_Penebusan" name="Keterangan_Penebusan" class="form-control" required>
                                <option value="Penuh">Penuh</option>
                                <option value="Sebagian">Sebagian</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Resep Obat</label>
                            <input type="text" name="Resep_Obat" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Total Harga</label>
                            <input type="integer" name="Total_Harga" class="form-control" required>
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