@extends('layout.main')

@section('wtitle', 'Tabel User')
@section('dashtitle', 'Tabel User')

@section('content')
<div class="container-fluid">
				
    {{-- <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Table</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Datatable</a></li>
        </ol>
    </div> --}}
    <!-- row -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Tabel Data User</h4>
                    {{-- <a class="btn btn-success" href="{{route ('adduser')}}">Tambah Data Baru</a>  --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Foto Profil</th>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Updated At</th>
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
                                    <td>
                                        <img src="{{asset('foto_user/'.$row->foto_user)}}" alt="" width="60px">
                                    </td>
                                    <td>{{$row->nama_user}}</td>
                                    <td>{{$row->nik}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->role}}</td>
                                    <td>{{$row->updated_at}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="/user/edituser/{{$row->id}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="/deleteuser/{{$row->id}}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>												
                                    </td>		
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
