@extends('layouts.materi')

@section('content')
    <!DOCTYPE html>
    <html lang="en">


    <!-- Mirrored from designing-world.com/affan-1.6.0/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2024 03:52:13 GMT -->

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Affan - PWA Mobile HTML Template">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <meta name="theme-color" content="#0134d4">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <!-- Title -->
        <title>SMKN 5 DUMAI</title>

        <!-- Favicon -->
        <link rel="icon" href="img/core-img/favicon.ico">
        <link rel="apple-touch-icon" href="img/icons/icon-96x96.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon-152x152.png">
        <link rel="apple-touch-icon" sizes="167x167" href="img/icons/icon-167x167.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/icons/icon-180x180.png">

        <!-- Style CSS -->
        <link rel="stylesheet" href="styles1.css">
        <link rel="stylesheet" href="css/animate.css">

        <!-- Web App Manifest -->
        <link rel="manifest" href="manifest.json">
        <style>
            .video-container {
                position: relative;
                width: 100%;
                height: 100vh;
            }

            iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            .text-overlay {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color:
                    white;
                text-align: center;

            }


            .animate-slide-up {
                animation: slideUp 1.7s ease-out forwards;
            }
        </style>
    </head>

    <body>
        <!-- Preloader -->
        {{-- <div id="preloader">
            <div class="spinner-grow text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div> --}}

        <!-- Internet Connection Status -->
        <div class="internet-connection-status" id="internetStatus"></div>

        <!-- Header Area -->
        <div class="header-area" id="headerArea">
            <div class="container">
                <!-- Header Content -->
                <div
                    class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
                    <!-- Logo Wrapper -->
                    <div class="logo-wrapper">
                        <a href="home.html">
                            <img src="img/core-img/logo.png" alt="">
                        </a>
                    </div>

                    <!-- Navbar Toggler -->
                    <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas"
                        data-bs-target="#affanOffcanvas" aria-controls="affanOffcanvas">
                        <span class="d-block"></span>
                        <span class="d-block"></span>
                        <span class="d-block"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content-wrapper">

            <div class="pt-3"></div>

            <div class="top-products-area">
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h5>Status Akun</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    Nama
                                </div>
                                <div class="col-8">
                                    : {{ $data->name }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    Email
                                </div>
                                <div class="col-8">
                                    : {{ $data->email }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    Username
                                </div>
                                <div class="col-8">
                                    : {{ $data->username }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    Peran
                                </div>
                                <div class="col-8">
                                    : {{ $data->role }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Footer Nav -->
            @include('layouts.footer')

            <!-- All JavaScript Files -->
            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/slideToggle.min.js"></script>
            <script src="js/internet-status.js"></script>
            <script src="js/tiny-slider.js"></script>
            <script src="js/venobox.min.js"></script>
            <script src="js/countdown.js"></script>
            <script src="js/rangeslider.min.js"></script>
            <script src="js/vanilla-dataTables.min.js"></script>
            <script src="js/index.js"></script>
            <script src="js/imagesloaded.pkgd.min.js"></script>
            <script src="js/isotope.pkgd.min.js"></script>
            <script src="js/dark-rtl.js"></script>
            <script src="js/active.js"></script>
            <script src="js/pwa.js"></script>
    </body>

    </html>
@endsection
<!-- Mirrored from designing-world.com/affan-1.6.0/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2024 03:52:22 GMT -->
