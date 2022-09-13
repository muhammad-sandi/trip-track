@extends('layout.main')

@section('wtitle', 'Catatan Perjalanan')

@section('content')
<div class="container-fluid">
				
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Table</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Datatable</a></li>
        </ol>
    </div>
    <!-- row -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic Datatable</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">  
                        <table id="example" class="display" style="min-width: 845px">
                            <button type="button" class="btn btn-success ">Tambah Data Baru</button> 
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama User</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Lokasi</th>
                                    <th>Suhu</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;    
                                @endphp
                                @foreach ($data as $index => $row)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$row->id_user}}</td>
                                    <td>{{$row->tanggal}}</td>
                                    <td>{{$row->jam}}</td>
                                    <td>{{$row->lokasi}}</td>
                                    <td>{{$row->suhu}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>												
                                    </td>		 
                                </tr>
                                @endforeach
                            </tbody>
    </div>
</div>
@endsection
