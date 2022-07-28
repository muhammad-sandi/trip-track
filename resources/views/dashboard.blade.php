@extends('layout.main')

@section('content')
<!-- Content Row -->
<div class="row d-flex justify-content-around">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                            Catatan Perjalanan</div>
                        <div class="text-xs mb-0 font-weight-bold text-secondary-500">Tabel data catatan perjalanan</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
                <a href="" class="btn btn-primary float-right mt-3"> Lihat Data</a>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-s font-weight-bold text-success text-uppercase mb-1">
                            Isi data perjalanan</div>
                        <div class="text-xs mb-0 font-weight-bold text-secondary-500">Form tambah data perjalanan</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
                <a href="" class="btn btn-success float-right mt-3"> Tambah Data</a>
            </div>
        </div>
    </div>

</div>
@endsection