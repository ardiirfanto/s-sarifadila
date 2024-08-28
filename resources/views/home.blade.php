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

            <!-- Welcome Toast -->
            <div class="toast toast-autohide custom-toast-1 toast-success home-page-toast" role="alert"
                aria-live="assertive" aria-atomic="true" data-bs-delay="7000" data-bs-autohide="true">
                <div class="toast-body">
                    <i class="bi bi-bookmark-check text-white h1 mb-0"></i>
                    <div class="toast-text ms-3 me-2">
                        <p class="mb-1 text-white">Welcome to Affan!</p>
                        <small class="d-block">Click the <strong>Add to Home Screen</strong> button &amp; enjoy it like an
                            app.</small>
                    </div>
                </div>
                <button class="btn btn-close btn-close-white position-absolute p-1" type="button" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
            {{-- <button onclick="soundBtn()" class="btn btn-primary">Sound</button> --}}

            <!-- Tiny Slider One Wrapper -->
            <div class="tiny-slider-one-wrapper">
                <div class="tiny-slider-one">
                    <!-- Single Hero Slide -->
                    <div>
                        <div class="single-hero-slide bg-overlay">
                            <div class="h-100 d-flex align-items-center text-center">
                                <div id="video-container" id="videoBg">
                                    <iframe
                                        src="https://www.youtube.com/embed/9N78O6KBvsg?autoplay=1&mute=1&showinfo=0&controls=0"
                                        frameborder="0">
                                    </iframe>
                                </div>
                                <div class="text-overlay">
                                    <h3 class="text-white mb-1">MEDIA PEMBELAJARAN</h3>
                                    <p class="text-white mb-4">PENDIDIKAN JASMANI ,OLAHRAGA DAN KESEHATAN</p>
                                    <a class="btn btn-creative btn-warning" href="#">KELAS X</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div>
                        <div class="single-hero-slide bg-overlay" style="background-image: url('img/bg-img/31.jpg')">
                            <div class="h-100 d-flex align-items-center text-center">
                                <div class="container">
                                    <h3 class="text-white mb-1">MEDIA PEMBELAJARAN</h3>
                                    <p class="text-white mb-4">PENDIDIKAN JASMANI ,OLAHRAGA DAN KESEHATAN</p>
                                    <a class="btn btn-creative btn-warning" href="#">KELAS X</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Hero Slide -->
                    <div>
                        <div class="single-hero-slide bg-overlay" style="background-image: url('img/bg-img/30.jpg')">
                            <div class="h-100 d-flex align-items-center text-center">
                                <div class="container">
                                    <h3 class="text-white mb-1">MEDIA PEMBELAJARAN</h3>
                                    <p class="text-white mb-4">PENDIDIKAN JASMANI ,OLAHRAGA DAN KESEHATAN</p>
                                    <a class="btn btn-creative btn-warning" href="#">KELAS X</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Hero Slide -->
                    <div>
                        <div class="single-hero-slide bg-overlay" style="background-image: url('img/bg-img/32.jpg')">
                            <div class="h-100 d-flex align-items-center text-center">
                                <div class="container">
                                    <h3 class="text-white mb-1">MEDIA PEMBELAJARAN</h3>
                                    <p class="text-white mb-4">PENDIDIKAN JASMANI ,OLAHRAGA DAN KESEHATAN</p>
                                    <a class="btn btn-creative btn-warning" href="#">KELAS X</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Hero Slide --> --}}

                </div>
            </div>

            {{-- Video BG --}}
            <div>

            </div>

            <div class="pt-3"></div>

            <div class="top-products-area">
                <div class="container">
                    <div class="row g-3">
                        {{-- Halaman BAB --}}
                        @foreach ($data as $item)
                            <div class="col-6 col-sm-4 col-lg-3 btn-click" id="bab-{{ $item->id }}">
                                <div class="card single-product-card">
                                    <div class="card-body p-3">
                                        <div class="product-thumbnail d-block">
                                            <img src="{{ asset('assets/img/materi/' . $item->gambar) }}" alt="">
                                            <span class="badge bg-danger">{{ $item->judul }}</span>
                                        </div>
                                        <span class="product-title d-block text-truncate">BAB {{ $item->bab }}</span>
                                        <button
                                            onclick="animateBtnPelajaran('bab-{{ $item->id }}','submateri/{{ $item->id }}')"
                                            class="btn btn-primary rounded-pill btn-sm">BUKA BAB
                                            {{ $item->bab }}</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{-- Halaman SKOR --}}
                        <div class="col-6 col-sm-4 col-lg-3 btn-click" id="bab-skor">
                            <div class="card single-product-card">
                                <div class="card-body p-3">
                                    <!-- Product Thumbnail -->
                                    <a class="product-thumbnail d-block" href="shop-details.html">
                                        <img src="{{ asset('img/bg-img/p6.jpg') }}" alt="">
                                        <!-- Badge -->

                                    </a>
                                    <!-- Product Title -->
                                    <a class="product-title d-block text-truncate" href="#">SKOR</a>
                                    <!-- Product Price -->

                                    <button onclick="animateBtnPelajaran('bab-skor','nilai')"
                                        class="btn btn-primary rounded-pill btn-sm">BUKA SKOR</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card bg-warning mb-3 bg-img" style="background-image: url('img/core-img/1.png')">
                <div class="card-body direction-rtl p-4">
                    <h2 class="text-white">KUIS</h2>
                    <p class="mb-4 text-white">Already designed more than 100+ pages for your needs. Such as -
                        Authentication,
                        Chats, eCommerce, Blog &amp; Miscellaneous pages.</p>
                    <a class="btn btn-warning" href="rangkuman">All Pages</a>
                    <livewire:login-quiz-form />
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card card-bg-img bg-img bg-overlay mb-3" style="background-image: url('img/bg-img/3.jpg')">
                <div class="card-body direction-rtl p-4">
                    <h2 class="text-white"> RANGKUMAN</h2>
                    <p class="mb-4 text-white">Rangkuman bermanfaat sebagai sarana untuk membantu kita mengingat isi buku
                        atau suatu uraian yang sangat panjang. Rangkuman berisi ide-ide pokok yang mewakili setiap bagian
                        bacaan atau teks aslinya. Dengan membaca rangkuman seolah-olah kita memahami keseluruhan isi buku
                        secara utuh.</p>
                    <button onclick="animateBtnPelajaran('bab-skor','rangkuman')" class="btn btn-warning">BUKA
                        Rangkuman</button>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card mb-3">
                <div class="card-body">
                    <h3>PETUNJUK</h3>
                    <p class="mb-4 text-blue">Manual pengguna atau panduan pengguna (bahasa Inggris: user guide, user
                        manual) suatu dokumen komunikasi teknis yang bertujuan memberikan bantuan untuk penggunaan suatu
                        sistem.</p>
                    <button onclick="animateBtnPelajaran('bab-skor','credit')" class="btn btn-warning">BUKA
                        Petunjuk</button>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="card-body direction-rtl p-4">

            </div>
        </div>
        </div>


        <div class="pb-3"></div>
        </div>

        <!-- Footer Nav -->
        <div class="footer-nav-area" id="footerNav">
            <div class="container px-0">
                <!-- Footer Content -->
                <div class="footer-nav position-relative">
                    <ul class="h-100 d-flex align-items-center justify-content-between ps-0">

                        <li class="active">
                            <a href="home">
                                <i class="bi bi-house"></i>
                                <span>Home</span>
                            </a>
                        </li>

                        <li>
                            <a href="https://e-library.erlanggaonline.co.id/info_product/detail/0056130030">
                                <i class="bi bi-shop"></i>
                                <span>Shop</span>
                            </a>
                        </li>

                        <li>
                            <a href="https://smkn5dumai.sch.id/">
                                <i class="bi bi-chat-dots"></i>
                                <span>Profile</span>
                            </a>
                        </li>

                        <li>
                            <a href="/logout">
                                <i class="bi bi-gear"></i>
                                <span>logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

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
