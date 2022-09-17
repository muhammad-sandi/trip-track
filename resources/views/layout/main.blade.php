<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Trip Track">
    <meta property="og:title" content="Trip Track">
    <meta property="og:description" content="Trip Track">
    <meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">
    1
    <!-- PAGE TITLE HERE -->
    <title>Trip Track | @yield('wtitle')</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">

    <!-- Datatable -->
        <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- FAVICONS ICON -->
	    <link rel="./shortcut icon" type="image/png" href="images/favicon.png">
	    <link href="./vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	    <link href="./vendor/lightgallery/css/lightgallery.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
        <link href="./vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
        <link rel="stylesheet" href="./vendor/nouislider/nouislider.min.css">
    <!-- Style css -->
        <link href="./css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    {{-- <div id="preloader">
        <div class="waviy">
            <span style="--i:1">R</span>
            <span style="--i:2">e</span>
            <span style="--i:3">f</span>
            <span style="--i:4">r</span>
            <span style="--i:5">e</span>
            <span style="--i:6">s</span>
            <span style="--i:7">h</span>
            <span style="--i:8">i</span>
            <span style="--i:9">n</span>
            <span style="--i:10">g</span>
        </div>
    </div> --}}
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="" class="brand-logo">
                <img src="./images/triptrack.png" alt="" style="width:4rem; margin-right:2rem;">
                <h2 style="margin-left:-1rem; font-weight:700;">Trip Track</h2>
            </a>
            {{-- <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div> --}}
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                            <img src="images/profile/pic1.jpg" width="20" alt="">
                            <div class="header-info ms-3">
                                <span class="font-w600 ">Hi,<b>Elina Monroe</b></span>
                                <small class="text-end font-w400">Elina@gmail.com</small>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="app-profile.html" class="dropdown-item ai-icon">
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18"
                                    height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span class="ms-2">Profile </span>
                            </a>    
                            <a href="/profile" class="dropdown-item ai-icon">
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18"
                                    height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                                <span class="ms-2">Logout </span>
                            </a>
                        </div>
                    </li>
                    <li aria-expanded="false">
                        <a href=" {{route ('dashboard')}}" class="nav-text"> <i class="flaticon-048-home"></i> Dashboard</a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-017-clipboard"></i>
                            <span class="nav-text">Catatan Perjalanan</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/catatan">Tabel Perjalanan</a></li>
                            <li><a href="/addcatatan">Tambah Perjalanan</a></li>
                            <li><a href="/updatecatatan">Edit Perjalanan</a></li>
                        </ul>

                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-050-info"></i>
                            <span class="nav-text">Apps</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="profile">Profile</a></li>
                            {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a> --}}
                                <ul aria-expanded="false">
                                    {{-- <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-register.html">Register</a></li> --}}
                                </ul>
                            </li>
                        </ul>
                    </li>
                        <li>
                            <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                <i class="flaticon-044-menu"></i>
                                <span class="nav-text">User</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="page-register.html">Tabel User</a></li>
                                <li><a href="page-register.html">Tambah User</a></li>
                                <li><a href="page-register.html">Edit User</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                <i class="flaticon-022-copy"></i>
                                <span class="nav-text">Pages</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="{{route ('login')}}">Login</a></li>
                                <li><a href="{{route ('register')}}">Register</a></li>
                            </ul>
                        </li>
                        
                </ul>
                <div class="copyright">
                    <p><strong>triptrack admin Dashboard</strong> © 2022 All Rights Reserved</p>
                </div>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            @yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->



        <!--**********************************
            Footer start
        ***********************************-->
        {{-- <div class="footer">

            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/"
                        target="_blank">DexignLab</a> 2022</p>
            </div>
        </div> --}}
        <!--**********************************
            Footer end
        ***********************************-->




    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="./vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <!-- Apex Chart -->
    <script src="./vendor/apexchart/apexchart.js"></script>
    <script src="./vendor/nouislider/nouislider.min.js"></script>
    <script src="./vendor/wnumb/wNumb.js"></script>

    <!-- Dashboard 1 -->
    <script src="./js/dashboard/dashboard-1.js"></script>

    <script src="./js/custom.min.js"></script>
    <script src="./js/dlabnav-init.js"></script>
    <script src="./js/demo.js"></script>
    {{-- <script src="./js/styleSwitcher.js"></script> --}}

    <!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>

</body>

</html>