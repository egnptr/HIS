@extends('pharmacy/layout/main')

@section('title', 'inforan')

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
                            <a href="#">Master resep</a>
                        </li>
                        <li class = "active"><a href="#">Informasi Tebus Obat</a></li>
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
                        <strong>Informasi Tebus Obat</strong>   
                    </div> 
                    <div class="pull-right">
                        <a href="{{ url('inforan/addtebus') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-plus"></i> Add
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class = "table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Doctors</th>
                                <th>Patients</th>
                                <th>Keterangan Penebusan</th>
                                <th>Obat 1</th>
                                <th>Dosis Obat 1</th>
                                <th>Harga obat 1</th>
                                <th>Obat 2</th>
                                <th>Dosis Obat 2</th>
                                <th>Harga obat 2</th>
                                <th>Obat 3</th>
                                <th>Dosis Obat 3</th>
                                <th>Harga obat 3</th>
                                <th>Obat 4</th>
                                <th>Dosis Obat 4</th>
                                <th>Harga obat 4</th>
                                <th>Obat 5</th>
                                <th>Dosis Obat 5</th>
                                <th>Harga obat 5</th>
                                <th>Total Harga</th>
                                <th></th>
                            </tr> 
                        </thead>
                        <tbody>
                            @foreach ($inforan as $item)
                                <tr>
                                    <td>{{ $loop ->iteration }}</td>                                    
                                    
                                    <td>{{ $loop ->iteration }}</td>
                                    <td>{{ $item ->Doctors }}</td>
                                    <td>{{ $item ->Patients }}</td>
                                    <td>{{ $item ->Keterangan_Penebusan }}</td>
                                    <td>{{ $item ->Obat_1 }}</td>
                                    <td>{{ $item ->Dosis_Obat_1 }}</td>
                                    <td>{{ $item ->Harga_Obat_1 }}</td>
                                    <td>{{ $item ->Obat_2 }}</td>
                                    <td>{{ $item ->Dosis_Obat_2 }}</td>
                                    <td>{{ $item ->Harga_Obat_2 }}</td>
                                    <td>{{ $item ->Obat_3 }}</td>
                                    <td>{{ $item ->Dosis_Obat_3 }}</td>
                                    <td>{{ $item ->Harga_Obat_3 }}</td>
                                    <td>{{ $item ->Obat_4 }}</td>
                                    <td>{{ $item ->Dosis_Obat_4 }}</td>
                                    <td>{{ $item ->Harga_Obat_4 }}</td>
                                    <td>{{ $item ->Obat_5 }}</td>
                                    <td>{{ $item ->Dosis_Obat_5 }}</td>
                                    <td>{{ $item ->Harga_Obat_5 }}</td>
                                    <td>{{ $item ->Total_Harga }}</td>
                                    <td class = "text-center">
                                        <a href="{{ url('inforan/edittebus/' .$item->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ url('inforan/' .$item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah kamu yakin untuk menghapus data ini?')">
                                            @method('delete')
                                            @csrf  
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
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