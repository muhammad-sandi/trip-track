@extends('layout.main')

@section('wtitle', 'Edit Perjalanan')
@section('dashtitle', 'Edit Perjalanan')

@section('content')
<div class="container-fluid">
    <!-- row -->
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Form Edit Data Perjalanan</h4>
                    <a href="{{route ('viewcatatan')}}"><div class="flaticon-082-share"> Back to tabel catatan</div></a>
                </div>
                <div class="card-body">
                    <div class="form-validation">
                        <form class="needs-validation" novalidate="" method="POST" action="/updatecatatan/{{$data->id}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3 row">
                                        <label class="col-form-label fw-bold" for="validationCustom01" style="margin-left: 2vw">id user
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="container-fluid" style="margin-top: -1.5vw">
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="Masukkan tanggal..." name="user_id" required="" value="{{$data->user_id}}">
                                            <div class="invalid-feedback">
                                                Harap masukkan tanggal
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-form-label fw-bold" for="validationCustom01" style="margin-left: 2vw">Tanggal
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="container-fluid" style="margin-top: -1.5vw">
                                            <input type="date" class="form-control" id="validationCustom01" placeholder="Masukkan tanggal..." name="tanggal" required="" value="{{$data->tanggal}}">
                                            <div class="invalid-feedback">
                                                Harap masukkan tanggal
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-form-label fw-bold" for="validationCustom01" style="margin-left: 2vw">Jam
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="container-fluid" style="margin-top: -1.5vw">
                                            <input type="time" class="form-control" id="validationCustom01" placeholder="Masukkan Jam..." name="jam" required="" value="{{$data->jam}}">
                                            <div class="invalid-feedback">
                                                Harap masukkan jam
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-form-label fw-bold" for="validationCustom01" style="margin-left: 2vw">Lokasi
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="container-fluid" style="margin-top: -1.5vw">
                                            <textarea type="text" class="form-control" id="validationCustom01" placeholder="Masukkan Lokasi..." name="lokasi" required="" value="{{$data->lokasi}}">{{$data->lokasi}}</textarea>
                                            <div class="invalid-feedback">
                                                Harap masukkan lokasi
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-form-label fw-bold" for="validationCustom01" style="margin-left: 2vw">Suhu
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="container-fluid" style="margin-top: -1.5vw">
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="Masukkan Suhu..." name="suhu" required="" value="{{$data->suhu}}">
                                            <div class="invalid-feedback">
                                                Harap masukkan suhu
                                            </div>
                                        </div>
                                    </div>
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