<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from designing-world.com/affan-1.6.0/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2024 03:53:00 GMT -->

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
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="apple-touch-icon" href="img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="img/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/icons/icon-180x180.png">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('styles1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <!-- Web App Manifest -->
    <link rel="manifest" href="manifest.json">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner-grow text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <!-- Internet Connection Status -->
    <div class="internet-connection-status" id="internetStatus"></div>

    <!-- Back Button -->
    <div class="login-back-button">
        <a href="/">
            <i class="bi bi-arrow-left-short"></i>
        </a>
    </div>

    <!-- Login Wrapper Area -->
    <div class="login-wrapper d-flex align-items-center justify-content-center" style="background-image: url('img/bg-img/login.jpg')">
        <div class="custom-container">
            <div class="text-center px-4">
                <img class="login-intro-img logo-animate" src="img/bg-img/36.png" alt="">
            </div>

            <!-- Register Form -->
            <div class="register-form mt-4">
                <h6 class="mb-3 text-center text-white">Selamat Datang di Media Pembelajaran PJOK</h6>

                <div class="form-group">
                    @if (session('status'))
                        <div class="alert alert-danger font-semibold" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="/loginProcess" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="text-white"></label>
                            <input type="email" name="email" placeholder="Enter Email" class="form-control"
                                id="email">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-white"></label>
                            <input type="password" name="password" placeholder="Enter Password" class="form-control"
                                id="password">
                        </div>
                        <button onclick="soundBtn()" class="btn btn-warning w-100" type="submit">Log In</button>
                    </form>
                </div>

                <!-- Login Meta -->
                <div class="login-meta-data text-center">
                    <a class="stretched-link forgot-password d-block mt-3 mb-1 text-white" href="forget-password.html">Lupa Password?</a>
                    <p class="mb-0 text-warning">Belum punya akun? <a class="stretched-link text-white" href="{{ route('register') }}">Silahkan Mendaftar</a></p>
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
        <script src="{{ asset('js/btn-click.js') }}"></script>
        <script src="{{ asset('js/background-music.js') }}"></script> {{-- Efek Sound Background --}}

</body>


<!-- Mirrored from designing-world.com/affan-1.6.0/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2024 03:53:00 GMT -->

</html>
