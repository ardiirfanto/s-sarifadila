<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMKN 2 DUMAI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('styles1.css') }}">

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
                        <img src="{{ asset('img/core-img/logo.png') }}" alt="">
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
        {{-- <div class="toast toast-autohide custom-toast-1 toast-success home-page-toast" role="alert"
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
        </div> --}}

        <div class="page-content-wrapper py-3">
            <div class="team-member-wrapper direction-rtl">
                <div class="container">
                    @yield('content')

                </div>
            </div>
        </div>

        <div class="pb-3"></div>
    </div>

    <script src="{{ asset('js/btn-click.js') }}"></script>
    @if (Auth::user()->role == 'siswa')
        <script src="{{ asset('js/background-music.js') }}"></script> {{-- Efek Sound Background --}}
    @endif
    <!-- Footer Nav -->
    @include('layouts.footer')

    <!-- All JavaScript Files -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/slideToggle.min.js') }}"></script>
    <script src="{{ asset('js/internet-status.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script src="{{ asset('js/venobox.min.js') }}"></script>
    <script src="{{ asset('js/countdown.js') }}"></script>
    <script src="{{ asset('js/rangeslider.min.js') }}"></script>
    <script src="{{ asset('js/vanilla-dataTables.min.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/dark-rtl.js') }}"></script>
    <script src="{{ asset('js/active.js') }}"></script>
    <script src="{{ asset('js/pwa.js') }}"></script>
</body>

</html>
