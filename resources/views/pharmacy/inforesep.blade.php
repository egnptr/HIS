@extends('pharmacy/layout/main')

@section('title', 'inforesep')

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
                        <li class = "active"><a href="#">Informasi resep</a></li>
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
                        <strong>Informasi Resep</strong>   
                    </div> 
                    <div class="pull-right">
                        <a href="{{ url('inforesep/addpres') }}" class="btn btn-success btn-sm">
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
                                
                                
                                <th></th>
                            </tr> 
                        </thead>
                        <tbody>
                            @foreach ($inforesep as $item)
                                <tr>
                                    <td>{{ $loop ->iteration }}</td>
                                    <td>{{ $item ->Doctors }}</td>
                                    <td>{{ $item ->Patients }}</td>
                                    
                                   
                                    <td class = "text-center">
                                         <a href="{{ url('inforesep/inforesepdetails/' .$item->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ url('inforesep/editpres/' .$item->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ url('inforesep/' .$item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah kamu yakin untuk menghapus data ini?')">
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