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
  <title>Affan - PWA Mobile HTML Template</title>

  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">
  <link rel="apple-touch-icon" href="img/icons/icon-96x96.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon-152x152.png">
  <link rel="apple-touch-icon" sizes="167x167" href="img/icons/icon-167x167.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/icons/icon-180x180.png">

  <!-- Style CSS -->
  <link rel="stylesheet" href="styles1.css">

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

  <!-- Header Area -->
  <div class="header-area" id="headerArea">
    <div class="container">
      <!-- Header Content -->
      <div class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
        <!-- Logo Wrapper -->
        <div class="logo-wrapper">
          <a href="home.html">
            <img src="img/core-img/logo.png" alt="">
          </a>
        </div>

        <!-- Navbar Toggler -->
        <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas" data-bs-target="#affanOffcanvas"
          aria-controls="affanOffcanvas">
          <span class="d-block"></span>
          <span class="d-block"></span>
          <span class="d-block"></span>
        </div>
      </div>
    </div>
  </div>

  <!-- # Sidenav Left -->
  <div class="offcanvas offcanvas-start" id="affanOffcanvas" data-bs-scroll="true" tabindex="-1"
    aria-labelledby="affanOffcanvsLabel">

    <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas"
      aria-label="Close"></button>

    <div class="offcanvas-body p-0">
      <div class="sidenav-wrapper">
        <!-- Sidenav Profile -->
        <div class="sidenav-profile bg-gradient">
          <div class="sidenav-style1"></div>

          <!-- User Thumbnail -->
          <div class="user-profile">
            <img src="img/bg-img/2.jpg" alt="">
          </div>

          <!-- User Info -->
          <div class="user-info">
            <h6 class="user-name mb-0">Affan Islam</h6>
            <span>CEO, Designing World</span>
          </div>
        </div>

        <!-- Sidenav Nav -->
        <ul class="sidenav-nav ps-0">
          <li>
            <a href="home.html"><i class="bi bi-house-door"></i> Home</a>
          </li>
          <li>
            <a href="elements.html"><i class="bi bi-folder2-open"></i> Elements
              <span class="badge bg-danger rounded-pill ms-2">220+</span>
            </a>
          </li>
          <li>
            <a href="pages.html"><i class="bi bi-collection"></i> Pages
              <span class="badge bg-success rounded-pill ms-2">100+</span>
            </a>
          </li>
          <li>
            <a href="#"><i class="bi bi-cart-check"></i> Shop</a>
            <ul>
              <li>
                <a href="shop-grid.html"> Shop Grid</a>
              </li>
              <li>
                <a href="shop-list.html"> Shop List</a>
              </li>
              <li>
                <a href="shop-details.html"> Shop Details</a>
              </li>
              <li>
                <a href="cart.html"> Cart</a>
              </li>
              <li>
                <a href="checkout.html"> Checkout</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="settings.html"><i class="bi bi-gear"></i> Settings</a>
          </li>
          <li>
            <div class="night-mode-nav">
              <i class="bi bi-moon"></i> Night Mode
              <div class="form-check form-switch">
                <input class="form-check-input form-check-success" id="darkSwitch" type="checkbox">
              </div>
            </div>
          </li>
          <li>
            <a href="login.html"><i class="bi bi-box-arrow-right"></i> Logout</a>
          </li>
        </ul>

        <!-- Social Info -->
        <div class="social-info-wrap">
          <a href="#">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="#">
            <i class="bi bi-twitter"></i>
          </a>
          <a href="#">
            <i class="bi bi-linkedin"></i>
          </a>
        </div>

        <!-- Copyright Info -->
        <div class="copyright-info">
          <p>
            <span id="copyrightYear"></span>
            &copy; Made by <a href="#">Designing World</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="page-content-wrapper">

    <!-- Welcome Toast -->
    <div class="toast toast-autohide custom-toast-1 toast-success home-page-toast" role="alert" aria-live="assertive"
      aria-atomic="true" data-bs-delay="7000" data-bs-autohide="true">
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

    <!-- Tiny Slider One Wrapper -->
    <div class="tiny-slider-one-wrapper">
      <div class="tiny-slider-one">
        <!-- Single Hero Slide -->
        <div>
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

        <!-- Single Hero Slide -->
        
      </div>
    </div>

    <div class="page-content-wrapper py-3">
    <div class="team-member-wrapper direction-rtl">
      <div class="container">
        <div class="row g-3">

          <!-- Single Team Member -->
          <div class="col-6">
            <div class="card team-member-card shadow">
              <div class="card-body">
                <!-- Member Image-->
                <div class="team-member-img shadow-sm">
                  <img src="img/bg-img/2.jpg" alt="">
                </div>
                <!-- Team Info-->
                <div class="team-info">
                  <h6 class="mb-1 fz-14">DASHBOARD VIDEO MATERI</h6>
                  
                </div>
              </div>
              <!-- Contact Info-->
              <div class="contact-info bg-primary">
            
                <a class="btn btn-creative btn-warning" href="/dashboard/videomateri">Update Video Materi</a>
              </div>
            </div>
          </div>

          <!-- Single Team Member -->
          <div class="col-6">
            <div class="card team-member-card shadow">
              <div class="card-body">
                <!-- Member Image-->
                <div class="team-member-img shadow-sm">
                  <img src="img/bg-img/20.jpg" alt="">
                </div>
                <!-- Team Info-->
                <div class="team-info">
                  <h6 class="mb-1 fz-14">DASHBOARD MATERI KUIS</h6>

                </div>
              </div>
              <!-- Contact Info-->
              <div class="contact-info bg-primary">
              <a class="btn btn-creative btn-warning" href="/dashboard/kuis">Update Materi Kuis</a>
              </div>
            </div>
          </div>

          <!-- Single Team Member -->
          <div class="col-6">
            <div class="card team-member-card shadow">
              <div class="card-body">
                <!-- Member Image-->
                <div class="team-member-img shadow-sm">
                  <img src="img/bg-img/20.jpg" alt="">
                </div>
                <!-- Team Info-->
                <div class="team-info">
                <h6 class="mb-1 fz-14">DASHBOARD DAFTAR SISWA</h6>
                </div>
              </div>
              <!-- Contact Info-->
              <div class="contact-info bg-info">
              <a class="btn btn-creative btn-warning" href="/dashboard/daftar-siswa">Update Daftar Siswa</a>
              </div>
            </div>
          </div>

          <!-- Single Team Member -->
          <div class="col-6">
            <div class="card team-member-card shadow">
              <div class="card-body">
                <!-- Member Image-->
                <div class="team-member-img shadow-sm">
                  <img src="img/bg-img/21.jpg" alt="">
                </div>
                <!-- Team Info-->
                <div class="team-info">
                <h6 class="mb-1 fz-14">DASHBOARD HASIL KUIS</h6>
                </div>
              </div>
              <!-- Contact Info-->
              <div class="contact-info bg-info">
              <a class="btn btn-creative btn-warning" href="/dashboard/hasil-kuis">Update Hasil Kuis</a>
              </div>
            </div>
          </div>
        </div>
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
            <a href="pages.html">
              <i class="bi bi-collection"></i>
              <span>Pages</span>
            </a>
          </li>

          <li>
            <a href="elements.html">
              <i class="bi bi-folder2-open"></i>
              <span>Elements</span>
            </a>
          </li>

          <li>
            <a href="chat-users.html">
              <i class="bi bi-chat-dots"></i>
              <span>Chat</span>
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

@endsection
<!-- Mirrored from designing-world.com/affan-1.6.0/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2024 03:52:22 GMT -->
</html>
