<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from designing-world.com/affan-1.6.0/blog-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2024 03:53:40 GMT -->

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
    <title>BAB {{ $materi->bab }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('styles1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <!-- Web App Manifest -->
    <link rel="manifest" href="{{ asset('manifest.json') }}">
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

    <!-- Dark mode switching -->
    <div class="dark-mode-switching">
        <div class="d-flex w-100 h-100 align-items-center justify-content-center">
            <div class="dark-mode-text text-center">
                <i class="bi bi-moon"></i>
                <p class="mb-0">Switching to dark mode</p>
            </div>
            <div class="light-mode-text text-center">
                <i class="bi bi-brightness-high"></i>
                <p class="mb-0">Switching to light mode</p>
            </div>
        </div>
    </div>

    <!-- RTL mode switching -->
    <div class="rtl-mode-switching">
        <div class="d-flex w-100 h-100 align-items-center justify-content-center">
            <div class="rtl-mode-text text-center">
                <i class="bi bi-text-right"></i>
                <p class="mb-0">Switching to RTL mode</p>
            </div>
            <div class="ltr-mode-text text-center">
                <i class="bi bi-text-left"></i>
                <p class="mb-0">Switching to default mode</p>
            </div>
        </div>
    </div>

    <!-- Setting Popup Overlay -->
    <div id="setting-popup-overlay"></div>

    <!-- Setting Popup Card -->
    <div class="card setting-popup-card shadow-lg" id="settingCard">
        <div class="card-body">
            <div class="container">
                <div class="setting-heading d-flex align-items-center justify-content-between mb-3">
                    <p class="mb-0">Settings</p>
                    <div class="btn-close" id="settingCardClose"></div>
                </div>

                <div class="single-setting-panel">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="availabilityStatus" checked>
                        <label class="form-check-label" for="availabilityStatus">Availability status</label>
                    </div>
                </div>

                <div class="single-setting-panel">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="sendMeNotifications" checked>
                        <label class="form-check-label" for="sendMeNotifications">Send me notifications</label>
                    </div>
                </div>

                <div class="single-setting-panel">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="darkSwitch">
                        <label class="form-check-label" for="darkSwitch">Dark mode</label>
                    </div>
                </div>

                <div class="single-setting-panel">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="rtlSwitch">
                        <label class="form-check-label" for="rtlSwitch">RTL mode</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Area -->
    <div class="header-area" id="headerArea">
        <div class="container">
            <!-- Header Content -->
            <div class="header-content position-relative d-flex align-items-center justify-content-between">
                <!-- Back Button -->
                <div class="back-button">
                    <a href="{{ url()->previous() }}">
                        <i class="bi bi-arrow-left-short"></i>
                    </a>
                </div>

                <!-- Page Title -->
                <div class="page-heading">
                    <h6 class="mb-0">BAB {{ $materi->bab }}</h6>
                </div>

                <!-- Settings -->
                <div class="setting-wrapper">
                    <div class="setting-trigger-btn" id="settingTriggerBtn">
                        <i class="bi bi-gear"></i>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content-wrapper py-3">
        <div class="container">
            <div class="row g-3 justify-content-center">
                @forelse ($data as $item)
                    <div class="col-12 col-md-8 col-lg-7 col-xl-6 btn-click" id="pelmat-{{ $item->id }}">
                        <div class="card shadow-sm blog-list-card">
                            <div class="d-flex align-items-center">
                                <div class="card-blog-img position-relative"
                                    style="background-image: url({{ asset('assets/img/submateri/' . $item->gambar) }})">
                                    {{-- <span class="badge bg-warning text-dark position-absolute card-badge">World</span> --}}
                                </div>
                                <div class="card-blog-content">
                                    <span
                                        class="badge bg-danger rounded-pill mb-2 d-inline-block">{{ $materi->judul }}</span>
                                    <a class="blog-title d-block mb-3 text-dark">{{ $item->judul }}</a>
                                    <button
                                        onclick="animateBtnPelajaran('pelmat-{{ $item->id }}','{{ route('detailsubmateri', ['idsubmateri' => $item->id]) }}')"
                                        class="btn btn-primary btn-sm">BUKA MATERI</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-danger my-3 mx-3 pt-2">
                        <h6 class="text-danger">Data belum ditambahkan</h6>
                    </div>
                @endforelse
            </div>
        </div>
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
    <script src="{{ asset('js/background-music.js') }}"></script>
    {{-- Efek Sound Background --}}
</body>

</html>