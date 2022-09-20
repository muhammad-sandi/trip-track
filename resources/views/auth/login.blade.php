<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dompet : Payment Admin Template">
    <meta property="og:title" content="Dompet : Payment Admin Template">
    <meta property="og:description" content="Dompet : Payment Admin Template">
    <meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Trip track | Login</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/triptrack.png">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3 d-flex center justify-content-center">
                                        <a href="#"><img src="images/triptrack.png" alt="" width="65px"></a>
                                        <div class="logo d-flex">
                                            <h2 class="d-flex align-items-center ps-2"><b>Trip Track</b></h2>
                                        </div>
                                    </div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                
                                        <div class="row mb-3 d-grid">
                                            <label for="email" class="col-md-4 col-form-label ms-4">{{ __('Email Address') }}</label>
                                
                                            <div class="col-md-10 ms-5">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                
                                        <div class="row mb-3 d-grid">
                                            <label for="password" class="col-md-4 col-form-label ms-4">{{ __('Password') }}</label>
                                
                                            <div class="col-md-10 ms-5">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="current-password">
                                
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                
                                        <div class="row mb-3 d-grid">
                                            <div class="col-md-6">
                                                <div class="form-check ms-5 mt-2">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                        {{ old('remember') ? 'checked' : '' }}>
                                
                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                
                                        <div class="row mb-0">
                                            <div class="col-md-0 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary pb-0 pt-0 me-4 w-25">
                                                    {{ __('Login') }}
                                                </button>
                                
                                                {{-- @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                                @endif --}}
                                            </div>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3 d-flex justify-content-center">
                                        <p>Don't have an account? <a class="text-primary" href="/register">Sign up</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    {{-- <script src="js/styleSwitcher.js"></script> --}}
</body>

</html>
