@extends('pharmacy/layout/main')

@section('title', 'infotebus')

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
                        <li class = "active"><a href="#">Informasi Tebus</a></li>
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
                        <strong>Informasi Tebus</strong>   
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
                            @foreach ($inforan as $item)
                                <tr>
                                    <td>{{ $loop ->iteration }}</td>
                                    <td>{{ $item ->Doctors }}</td>
                                    <td>{{ $item ->Patients }}</td>
                                    
                                   
                                    <td class = "text-center">
                                         <a href="{{ url('infotebus/infotebusdetails/' .$item->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ url('infotebus/edittebus/' .$item->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
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