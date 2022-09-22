@extends('layout.main')

@section('wtitle', 'Dashboard')
@section('dashtitle', 'Dashboard')

@section('content')
<!-- row -->
<div class="container-fluid">
    <div class="row invoice-card-row">
            <div class="top d-flex justify-content-around">
                <div class="col-xl-3 col-xxl-5 col-sm-6"">
                    <a href="{{route ('viewcatatan')}}">
                        <div class="card bg-warning invoice-card">
                            <div class="card-body d-flex">
                                <div class="icon me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35px" height="34px" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"/></svg>
                                </div>
                                <div>
                                    <h4 class="text-white invoice-num">Data Perjalanan</h4>
                                    <span class="text-white fs-18">Lihat Tabel perjalanan</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-xxl-5 col-sm-6">
                    <a href="{{route('addcatatan')}}">
                        <div class="card bg-success invoice-card">
                            <div class="card-body d-flex">
                                <div class="icon me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg"width="35px" height="34px" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
            
                                </div>
                                <div>
                                    <h2 class="text-white invoice-num">Tambah Data Perjalanan </h2>
                                    <span class="text-white fs-18">Buat data perjalanan baru</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @if(auth()->user()->role == 'admin')
            <div class="bottom d-flex justify-content-around mt-3">
                <div class="col-xl-3 col-xxl-5 col-sm-6">
                    <a href="{{route('viewuser')}}">
                        <div class="card bg-info invoice-card">
                            <div class="card-body d-flex">
                                <div class="icon me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33px" height="32px" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
            
                                </div>
                                <div>
                                    <h2 class="text-white invoice-num">Data User</h2>
                                    <span class="text-white fs-18">Lihat tabel user</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-xxl-5 col-sm-6">
                    <a href="{{route ('adduser')}}">
                        <div class="card bg-secondary invoice-card">
                            <div class="card-body d-flex">
                                <div class="icon me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg"  width="35px" height="34px" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M352 128c0 70.7-57.3 128-128 128s-128-57.3-128-128S153.3 0 224 0s128 57.3 128 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
                                </div>
                                <div>
                                    <h2 class="text-white invoice-num">Tambah Data User</h2>
                                    <span class="text-white fs-18">Buat data user baru</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection