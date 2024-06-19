<!DOCTYPE html>
<html lang="en">

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
  <title>Affan - PWA Mobile HTML Template</title>

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
  <link rel="manifest" href="manifest.jso">
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

  <!-- Hero Block Wrapper -->
  <div class="hero-block-wrapper bg-primary">
    <!-- Styles -->
    <div class="hero-block-styles">
      <div class="hb-styles1" style="background-image: url('img/core-img/dot.png')"></div>
      <div class="hb-styles2"></div>
      <div class="hb-styles3"></div>
    </div>

    <div class="custom-container">
      <!-- Skip Page -->
      <div class="skip-page">
        <a href="home.html">Skip</a>
      </div>

      <!-- Hero Block Content -->
      <div class="hero-block-content">
        <img class="mb-4 logo-animate" src="img/bg-img/19.png" alt="">
        <h2 class="display-4 text-white mb-3">Media Pembelajaran PJOK Kelas X</h2>
        <p class="text-white">Media Pembelajaran ini di buat berdasarkn buku PJOK M. Azhar Mustabirin & Indriati Agung Rahayu.</p>
        <a onclick="soundBtn()" class="btn btn-warning btn-lg w-100" href="{{ ('dashboard') }}">Mulai...</a>
      </div>
    </div>
  </div>
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
  <script src="{{ asset('js/btn-click.js') }}"></script>
</body>


<!-- Mirrored from designing-world.com/affan-1.6.0/hero-blocks.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2024 03:52:22 GMT -->
</html>
