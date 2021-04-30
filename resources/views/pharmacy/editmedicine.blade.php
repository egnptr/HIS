@extends('pharmacy/layout/main')

@section('title', 'Order')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <h1>Master Obat</h1>
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
                            <a href="#">Master Obat</a>
                        </li>
                        <li class = "active"><a href="#">Informasi Obat</a></li>
                        <li class = "active"><a href="#">Edit Informasi Obat</a></li>
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
                        <strong>Edit Pesan Obat</strong>   
                    </div> 
                    <div class="pull-right">
                        <a href="{{ url('order') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                
                    <div class="row">
                    <div class="col-md-4 offset-md-4">
                    <form action="{{ url ('order/' .$edited->id) }}" method="POST">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label>Nama Obat</label>
                            <input type="text" name="Nama_Obat" class="form-control" value={{ $edited-> Nama_Obat }} autofocus required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Obat</label>
                            <select id="Jenis_Obat" name="Jenis_Obat" class="form-control" value={{ $edited-> Jenis_Obat }} >
                            <option value={{ $edited-> Jenis_Obat }} selected require>{{ $edited-> Jenis_Obat }}</option>
                                <option value="Analgesik">Analgesik</option>
                                <option value="Antibiotik">Antibiotik</option>
                                <option value="Anti Konvulsan">Anti Konvulsan</option>
                                <option value="Anti Konvulsan">Bonkodilator</option>
                                <option value="Diabetes">Diabetes</option>
                                <option value="Elektrolit">Elektrolit</option>
                                <option value="Hormon">Hormon</option>
                                <option value="Imunoglobulin">Imunoglobulin</option>
                                <option value="Insulin">Insulin</option>
                                <option value="Infeksi">Infeksi</option>
                                <option value="Kolestrol">Kolestrol</option>
                                <option value="Mental">Mental</option>
                                <option value="Migrain">Migrain</option>
                                <option value="Paracetamol">Paracetamol</option>
                                <option value="PDE-5 Inhibitor">PDE-5 Inhibitor</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kategori Obat</label>
                            <select id="Kategori_Obat" name="Kategori_Obat" class="form-control" value={{ $edited-> Kategori_Obat }} selected required>
                            <option value={{ $edited-> Kategori_Obat }} selected require>{{ $edited-> Kategori_Obat }}</option>
                                <option value="Butuh Resep">Butuh Resep</option>
                                <option value="Bebas">Bebas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="number" name="Jumlah" class="form-control" value={{ $edited-> Jumlah }} required>
                        </div>
                        <div class="form-group">
                            <label>Harga Beli</label>
                            <input type="text" name="Harga_Beli" class="form-control" value={{ $edited-> Harga_Beli }} required>
                        </div>
                        <div class="form-group">
                            <label>Harga Jual</label>
                            <input type="text" name="Harga_Jual" class="form-control" value={{ $edited-> Harga_Jual }} required>
                        </div>
                        <div class="form-group">
                            <label>Supplier</label>
                            <select id="Supplier" name="Supplier" class="form-control" value={{ $edited-> Supplier }} selected required>
                            <option value={{ $edited-> Supplier }} selected require>{{ $edited-> Supplier }}</option>
                                <option value="PT. Afifarma">PT. Afifarma</option>
                                <option value="PT. ASTA Medica">PT. ASTA Medica</option>
                                <option value="PT. Aventis">PT. Aventis</option>
                                <option value="PT. Biofarma">PT. Biofarma</option>
                                <option value="PT. Bufa Aneka">PT. Bufa Aneka</option>
                                <option value="PT. Eli Lily">PT. Eli Lily</option>
                                <option value="PT. MersiFarma">PT. MersiFarma</option>
                                <option value="Pt. Otsuka">Pt. Otsuka</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Kadaluarsa</label>
                            <input type="date" name="Tanggal_Kadaluarsa" class="form-control" value={{ $edited-> Tanggal_Kadaluarsa }} required>
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