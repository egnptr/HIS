@extends('main')

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
                            <label>Nama Farmasis</label>
                            <input type="text" name="Nama_Farmasis" class="form-control" value={{ $edited-> Nama_Farmasis }} autofocus required>
                        </div>
                        <div class="form-group">
                            <label>Nama Obat</label>
                            <input type="text" name="Nama_Obat" class="form-control" value={{ $edited-> Nama_Obat }} required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Obat</label>
                            <input type="text" name="Jenis_Obat" class="form-control" value={{ $edited-> Jenis_Obat }} required>
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
                            <textarea name="Supplier" class="form-control" required> {{ $edited -> Supplier }} </textarea>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Kadaluarsa</label>
                            <input type="date" name="Tanggal_Kadaluarsa" class="form-control" value={{ $edited-> Tanggal_Kadaluarsa }} required>
                        </div>
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                    </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div>  
@endsection