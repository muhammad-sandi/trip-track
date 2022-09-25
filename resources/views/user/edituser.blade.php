@extends('layout.main')

@if (auth()->user()->role == 'admin')    
    @section('wtitle', 'Edit User')
    @section('dashtitle', 'Edit User')
@else
    @section('wtitle', 'Edit Profil')
    @section('dashtitle', 'Edit Profil')
@endif
    
@section('content')
<div class="container-fluid">
    <!-- row -->
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    @if (auth()->user()->role == 'admin')
                        <h4 class="card-title">Form Edit Data User</h4>
                    @else
                        <h4 class="card-title">Form Edit Profil</h4>
                    @endif
                    <a href="{{route ('viewuser')}}"><div class="flaticon-082-share"> Back to tabel user</div></a>
                </div>
                <div class="card-body">
                    <div class="form-validation">
                        <form class="needs-validation" novalidate="" method="POST" action="/updateuser/{{$data->id}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3 row">
                                        <label class="col-form-label fw-bold" for="validationCustom01" style="margin-left: 2vw">Edit Foto Profil
                                        </label>
                                        <div class="container-fluid" style="margin-top: -1.5vw">
                                            <input type="file" class="form-file-input" id="validationCustom01" placeholder="Masukkan foto..." name="foto_user" value="{{$data->foto_user}}">
                                            <div class="invalid-feedback">
                                                Harap masukkan foto
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-form-label fw-bold" for="validationCustom01" style="margin-left: 2vw">Nomor NIK
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="container-fluid" style="margin-top: -1.5vw">
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="Masukkan nomor nik..." name="nik" required="" value="{{$data->nik}}">
                                            <div class="invalid-feedback">
                                                Harap masukkan nomor nik
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-form-label fw-bold" for="validationCustom01" style="margin-left: 2vw">Nama Lengkap
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="container-fluid" style="margin-top: -1.5vw">
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="Masukkan nama lengkap..." name="nama_user" required="" value="{{$data->nama_user}}">
                                            <div class="invalid-feedback">
                                                Harap masukkan nama lengkap
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-form-label fw-bold" for="validationCustom01" style="margin-left: 2vw">Email
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="container-fluid" style="margin-top: -1.5vw">
                                            <input type="email" class="form-control" id="validationCustom01" placeholder="Masukkan email..." name="email" required="" value="{{$data->email}}">
                                            <div class="invalid-feedback">
                                                Harap masukkan email
                                            </div>
                                        </div>
                                    </div>
                                @if (auth()->user()->role == 'admin')        
                                    <div class="mb-3 row">
                                        <label class="col-form-label fw-bold" for="validationCustom01" style="margin-left: 2vw">Role
                                        </label>
                                        <div class="container-fluid" style="margin-top: -1.5vw" tabindex="0">
                                            <select class="form-select nice-select default-select form-control wide" aria-label="Default select example" name='role'>
                                                <option selected>{{$data->role}}</option>
                                                <option value="admin">Admin</option>
                                                <option value="user">User</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Harap masukkan email
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                    {{-- <div class="mb-3 row">
                                        <label class="col-form-label fw-bold" for="validationCustom01" style="margin-left: 2vw">Password
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="container-fluid" style="margin-top: -1.5vw">
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="Masukkan password..." name="password" required="" value="{{$data->}}">
                                            <div class="invalid-feedback">
                                                Harap masukkan password
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <button type="submit" class="btn btn-primary col-lg-2 fw-bold" style="margin-left: 45vw; margin-top: 2vh;">Simpan</button>                       
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection