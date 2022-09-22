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
                            <img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="profile-details">
                            <div class="profile-name px-3 pt-2">
                                <h4 class="text-primary mb-0">{{ Auth::user()->nama_user }}</h4>
                                <p>UI Designer</p>
                            </div>
                            <div class="profile-email px-2 pt-2">
                                <h4 class="text-muted mb-0">{{ Auth::user()->email }}</h4>
                                <p>Email</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection