@extends('pharmacy/layout/main')

@section('title', 'Info')

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
                        <li class = "active"><a href="#">Pesan Obat</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class = "card">
                <div class="card-header">
                   <div class="pull-left">
                        <strong>Pesan Obat</strong>   
                    </div> 
                    <div class="pull-right">
                        <a href="{{ url('info/addinfo') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-plus"></i> Add
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class = "table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Farmasis</th>
                                <th>Nama Obat</th>
                                <th>Jenis Obat</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Supplier</th>
                                <th></th>
                            </tr> 
                        </thead>
                        <tbody>
                            @foreach ($info as $item)
                                <tr>
                                    <td>{{ $loop ->iteration }}</td>
                                    <td>{{ $item ->Nama_Farmasis }}</td>
                                    <td>{{ $item ->Nama_Obat }}</td>
                                    <td>{{ $item ->Jenis_Obat }}</td>
                                    <td>{{ $item ->Jumlah }}</td>
                                    <td>{{ $item ->Harga }}</td>
                                    <td>{{ $item ->Supplier }}</td>
                                    <td class = "text-center">
                                        {{-- <a href="{{ url('order/editmedicine/' .$item->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a> --}}
                                        <form action="{{ url('info/' .$item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah pesanan obat sudah terkonfirmasi diterima?')">
                                            @method('delete')
                                            @csrf  
                                            <button class="btn btn-success btn-sm">
                                                <i class="fa fa-check"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- .animated -->
    </div>  
@endsection