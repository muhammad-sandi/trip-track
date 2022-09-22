@extends('layout.main')
@section('wtitle', 'Profile')
@section('dashtitle', 'Profile')

@section('content')

   {{-- row --}}
    {{-- <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">App</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
        </ol>
    </div> --}}

    <div class="row">
        <div class="col-lg-12">
            <div class="profile card card-body px-3 pt-3 pb-0">
                <div class="profile-head">
                    <div class="photo-content">
                        <div class="cover-photo rounded"></div>
                    </div>
                    <div class="profile-info">
                        <div class="profile-photo">
                            <img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="Profile">
                        </div>
                        <div class="profile-details d-inline">
                            <div class="profile-name px-3 pt-2">
                                <h5 class="text-primary mb-0">NIK</h4>
                                <p>{{ Auth::user()->nik }}</p>
                            </div>
                            <div class="profile-name px-3 pt-2">
                                <h5 class="text-primary mb-0">Nama</h4>
                                <p>{{ Auth::user()->nama_user }}</p>
                            </div>
                            <div class="profile-email px-3 pt-2">
                                <h5 class="text-primary mb-0">Email</h5>
                                <p>{{ Auth::user()->email }}</p>
                            </div>
                            
                            <div class="px-3 pt-2 dropdown ms-auto d-flex">
                                <a href="/user/edituser/{{ Auth::user()->id }}"
                                    class="btn btn-primary shadow btn-sm sharp "><i
                                        class="fas fa-pencil-alt"></i>&nbsp;Edit</a>
                                {{-- <a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
                                    <li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to btn-close friends</li>
                                    <li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
                                    <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection