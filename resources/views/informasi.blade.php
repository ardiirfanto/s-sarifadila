<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/logo.png" type="image/png">
<title>Media Pembelajaran</title>


<link rel="stylesheet" href="{{ asset('vender/bootstrap/css/bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ asset('vender/icofont/icofont.min.css') }}">
<link href="{{ asset('../../4.0/lineicons.css" rel="stylesheet') }}">

<link rel="stylesheet" href="{{ asset('vender/slick/slick/slick.css' )}}">
<link rel="stylesheet" href="{{ asset('vender/slick/slick/slick-theme.css') }}">

<link rel="stylesheet" href="{{ asset('css/style4.css')}}">
</head>
<body class="bg-light d-flex flex-column vh-100">
<div class="homepage-navbar shadow mb-auto p-3 bg-primary">
<div class="d-flex align-items-center">
<a href="#" class="link-dark text-truncate d-flex align-items-center gap-2" data-bs-toggle="offcanvas" data-bs-target="#location" aria-controls="location">

<span>
<img src="img/logo21.png" alt="Logo" width="200" height="40">
</span>
</a>
<div class="d-flex align-items-center gap-2 ms-auto">

<a class="toggle hc-nav-trigger hc-nav-1" href="#" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
<img src="img/logo.png" alt="Logo" width="60" height="60">
</a>
</div>
</div>
<div class="pt-3">

<a href="#" data-bs-toggle="offcanvas" data-bs-target="#searchoffcanvas" aria-controls="searchoffcanvas">

</a>
</div>
</div>
<div class="vh-100 my-auto overflow-auto">
<div class="homepage-one-header">

<div class="homepage-nav-one-header">
<nav class="navbar navbar-expand-lg navbar-light navbar-default bg-white osahan-second-nav py-0 shadow-sm">
<div class="container px-0 px-xl-3">
<div class="offcanvas offcanvas-start p-4 p-lg-0" id="navbar-default">
<div class="d-flex justify-content-between align-items-center mb-2 d-block d-lg-none">
<a class="navbar-brand m-0 d-lg-block flex-shrink-0" href="index.html">
<img src="img/logo.png" alt="" class="img-fluid logo-img">
</a>
<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="d-block d-lg-none">

<div class="mt-3 mb-4">
<a href="#" class="link-dark osahan-location text-decoration-none d-flex align-items-center gap-2 text-start flex-shrink-0 w-100" data-bs-toggle="offcanvas" data-bs-target="#location" aria-controls="location">
<i class="lni lni-map-marker text-danger fs-5"></i>
<div class="lh-sm">
<p class="fw-normal mb-0 small">Delivery in 16 minutes</p>
<p class="text-muted m-0 text-truncate d-inline-block mb-0 align-bottom">H.No. 2834 Street, 784 Sector, Ludhiana, Punjab</p>
</div>
<i class="lni lni-chevron-down ms-auto"></i>
</a>
</div>
</div>
<div class="d-block d-lg-none mb-3">
<a class="btn btn-danger d-flex align-items-center rounded-pill w-100" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
<i class="lni lni-grid-alt d-flex me-1"></i> All Departments
</a>

</div>
<div class="d-block d-lg-none h-100" data-simplebar="">
<ul class="navbar-nav ">
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Home
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="index.html">Home 1</a></li>
<li><a class="dropdown-item" href="index-2.html">Home 2</a></li>
<li><a class="dropdown-item" href="index-3.html">Home 3</a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Shop
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="listing.html">Shop Grid - Filter</a></li>
<li><a class="dropdown-item" href="shop-grid-3-column.html">Shop Grid - 3 column</a></li>
<li><a class="dropdown-item" href="shop-list.html">Shop List - Filter</a></li>
<li><a class="dropdown-item" href="shop-fullwidth.html">Shop Wide</a></li>
<li><a class="dropdown-item" href="product-detail.html">Shop Single</a></li>
<li><a class="dropdown-item" href="shop-wishlist.html">Shop Wishlist</a></li>
<li><a class="dropdown-item" href="shop-cart.html">Shop Cart</a></li>
<li><a class="dropdown-item" href="checkout.html">Shop Checkout</a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Stores
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="store-list.html">Store List</a></li>
<li><a class="dropdown-item" href="store-grid.html">Store Grid</a></li>
<li><a class="dropdown-item" href="store-single.html">Store Single</a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Mega Menu
</a>
<ul class="dropdown-menu">
<li class="dropdown-submenu ">
<a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
Dairy, Bread & Eggs
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="listing.html">Milk Drinks</a></li>
<li><a class="dropdown-item" href="listing.html">Curd & Yogurt</a></li>
<li> <a class="dropdown-item" href="listing.html">Eggs</a></li>
<li><a class="dropdown-item" href="listing.html">Buns & Bakery</a></li>
<li><a class="dropdown-item" href="listing.html">Cheese</a></li>
<li> <a class="dropdown-item" href="listing.html">Condensed Milk</a></li>
<li><a class="dropdown-item" href="listing.html">Dairy Products</a></li>
</ul>
</li>
<li class="dropdown-submenu ">
<a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
Vegetables & Fruits
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="listing.html">Vegetables</a></li>
<li><a class="dropdown-item" href="listing.html">Fruits</a></li>
<li> <a class="dropdown-item" href="listing.html">Exotics & Premium</a></li>
<li><a class="dropdown-item" href="listing.html">Fresh Sprouts</a></li>
<li><a class="dropdown-item" href="listing.html">Frozen Veg</a></li>
</ul>
</li>
<li class="dropdown-submenu ">
<a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
Cold Drinks & Juices
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="listing.html">Soft Drinks</a></li>
<li><a class="dropdown-item" href="listing.html">Fruit Juices</a></li>
<li> <a class="dropdown-item" href="listing.html">Coldpress</a></li>
<li><a class="dropdown-item" href="listing.html">Soda & Mixers</a></li>
<li><a class="dropdown-item" href="listing.html">Milk Drinks</a></li>
<li><a class="dropdown-item" href="listing.html">Health Drinks</a></li>
<li><a class="dropdown-item" href="listing.html">Herbal Drinks</a></li>
</ul>
</li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Pages
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="blog.html">Blog</a></li>
<li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
<li><a class="dropdown-item" href="blog-category.html">Blog Category</a></li>
<li><a class="dropdown-item" href="about.html">About us</a></li>
<li><a class="dropdown-item" href="404error.html">404 Error</a></li>
<li><a class="dropdown-item" href="contact.html">Contact</a></li>
<li><a class="dropdown-item" href="faq.html">FAQ</a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Account
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="signin.html">Sign in</a></li>
<li><a class="dropdown-item" href="signup.html">Signup</a></li>
<li><a class="dropdown-item" href="forgot-password.html">Forgot Password</a></li>
<li class="dropdown-submenu dropend">
<a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
My Account
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="account-orders.html">Orders</a></li>
<li><a class="dropdown-item" href="account-settings.html">Settings</a></li>
<li><a class="dropdown-item" href="account-address.html">Address</a></li>
<li><a class="dropdown-item" href="my-wallet.html">My Wallet</a></li>
<li><a class="dropdown-item" href="account-notification.html">Notification</a></li>
</ul>
</li>
<li><a class="dropdown-item" href="my-account.html">My Account Tabs</a></li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</nav>
</div>

</div>

<section class="py-3 bg-white">
<div class="container px-3">
<div class="d-flex align-items-center justify-content-between mb-3">
<h6 class="m-0">Materi</h6>

</div>
<div class="row row-cols-xl-6 row-cols-lg-6 row-cols-md-4 row-cols-4 g-1 category">
<div class="col">
<div class="card text-center rounded-4">
<div class="card-body">
<img src="img/category-1.jpg" alt="#" class="img-fluid mb-1">
<p class="card-text text-truncate mb-0 mt-2 small">Pelajaran 1</p>
<a href="pelajaran-1" class="stretched-link"></a>
</div>
</div>
</div>
<div class="col">
<div class="card text-center rounded-4">
<div class="card-body">
<img src="img/category-2.jpg" alt="#" class="img-fluid mb-1">
<p class="card-text text-truncate mb-0 mt-2 small">Pelajaran 2</p>
<a href="pelajaran-2" class="stretched-link"></a>
</div>
</div>
</div>

<div class="col">
<div class="card text-center rounded-4">
<div class="card-body">
<img src="img/category-7.jpg" alt="#" class="img-fluid mb-1">
<p class="card-text text-truncate mb-0 mt-2 small">Pelajaran 3</p>
<a href="pelajaran-3" class="stretched-link"></a>
</div>
</div>
</div>

<div class="col">
<div class="card text-center rounded-4">
<div class="card-body">
<img src="img/category-12.jpg" alt="#" class="img-fluid mb-1">
<p class="card-text text-truncate mb-0 mt-2 small">Pelajaran4</p>
<a href="pelajaran-4" class="stretched-link"></a>
</div>
</div>
</div>

<div class="col">
<div class="card text-center rounded-4">
<div class="card-body">
<img src="img/category-15.jpg" alt="#" class="img-fluid mb-1">
<p class="card-text text-truncate mb-0 mt-2 small">Skor</p>
<a href="/nilai" class="stretched-link"></a>
</div>
</div>
</div>
</div>
</div>
</section>


<div class="container px-3">
<div class="row g-3">
<div class="col-lg-4 col-12">
<div class="adver-banner-1 rounded-4 p-4">
<h3 class="fw-bold text-light">PETUNJUK 
</h3>
<a href="petunjuk/pelajaran-1" class="btn btn-light rounded-pill">Lihat  Petunjuk</a>
</div>
</div>

<div class="col-lg-4 col-12">
<div class="adver-banner-2 rounded-4 p-4">
<h3 class="fw-bold text-light">RANGKUMAN<br>
</h3>
<a href="rangkuman" class="btn btn-light rounded-pill">Lihat Rangkuman</a>
</div>
</div>
<div class="col-lg-4 col-12">
<div class="adver-banner-3 rounded-4 p-4">
<h3 class="fw-bold text-light">PENDAHULUAN
</h3>

<a href="credit" class="btn btn-light rounded-pill">Lihat Pendahuluan</a>
</div>
</div>
</div>
</div>

<section class="py-4">
<div class="container px-3">
<div class="d-flex align-items-center justify-content-between mb-3">


</div>
<div class="row">
<div class="col-12 px-1">
<div class="top-picks">

<div class="top-picks-item">
<div class="card bg-transparent border-0 overflow-hidden h-100 mx-2">
<a href="product-detail.html" class="link-dark">
<div class="rounded-4 p-2 position-relative product-box bg-white">
<img src="img/list/9.jpeg" alt="" class="img-fluid h-100 d-block mx-auto">
</div>
</a>
<div class="bg-info position-absolute top-0 text-white osahan-badge text-center mx-3">
<b>2%</b><br>OFF
</div>
<div class="card-body pt-1 px-0">
<p class="text-muted mb-1">Amul</p>
<h6 class="card-title fw-bold">Pasteuised Butter Pack of 2</h6>
<p class="card-text text-muted small">100 g x 2</p>
</div>
<div class="card-footer bg-transparent border-0 d-flex align-items-end justify-content-between p-0">
<div>
<del class="small text-muted">$108</del>
<h6 class="fw-bold m-0">$106</h6>
</div>
<a data-bs-toggle="offcanvas" data-bs-target="#mycart" aria-controls="mycart" href="cart.html" class="btn btn-outline-danger btn-sm rounded-3 fw-bold px-4 osahan-new-btn">ADD</a>
</div>
</div>
</div>

<div class="top-picks-item">
<div class="card bg-transparent border-0 overflow-hidden h-100 mx-2">
<a href="product-detail.html" class="link-dark">
<div class="rounded-4 p-2 position-relative product-box bg-white">
<img src="img/list/10.jpeg" alt="" class="img-fluid h-100 d-block mx-auto">
</div>
</a>
<div class="bg-success position-absolute top-0 text-white osahan-badge text-center mx-3">
<b>4%</b><br>OFF
</div>
<div class="card-body pt-1 px-0">
<p class="text-muted mb-1">Fortune</p>
<h6 class="card-title fw-bold">Soya Refined Pure Soybean Oil</h6>
<p class="card-text text-muted">1 L</p>
</div>
<div class="card-footer bg-transparent border-0 d-flex align-items-end justify-content-between p-0">
<div>
<del class="small text-muted">$180</del>
<h6 class="fw-bold m-0">$173</h6>
</div>
<a data-bs-toggle="offcanvas" data-bs-target="#mycart" aria-controls="mycart" href="cart.html" class="btn btn-outline-danger btn-sm rounded-3 fw-bold px-4 osahan-new-btn">ADD</a>
</div>
</div>
</div>

<div class="top-picks-item">
<div class="card bg-transparent border-0 overflow-hidden h-100 mx-2">
<a href="product-detail.html" class="link-dark">
<div class="rounded-4 p-2 position-relative product-box bg-white">
<img src="img/list/11.jpeg" alt="" class="img-fluid h-100 d-block mx-auto">
</div>
</a>
<div class="bg-secondary position-absolute top-0 text-white osahan-badge text-center mx-3">
<b>4%</b><br>OFF
</div>
<div class="card-body pt-1 px-0">
<p class="text-muted mb-1">Fortune</p>
<h6 class="card-title fw-bold">Kachi Ghani Pure Mustard Oil</h6>
<p class="card-text text-muted">1 L</p>
</div>
<div class="card-footer bg-transparent border-0 d-flex align-items-end justify-content-between p-0">
<div>
<del class="small text-muted">$196</del>
<h6 class="fw-bold m-0">$188</h6>
</div>
<a data-bs-toggle="offcanvas" data-bs-target="#mycart" aria-controls="mycart" href="cart.html" class="btn btn-outline-danger btn-sm rounded-3 fw-bold px-4 osahan-new-btn">ADD</a>
</div>
</div>
</div>

<div class="top-picks-item">
<div class="card bg-transparent border-0 overflow-hidden h-100 mx-2">
<a href="product-detail.html" class="link-dark">
<div class="rounded-4 p-2 product-box bg-white">
<img src="img/list/12.jpeg" alt="" class="img-fluid h-100 d-block mx-auto">
</div>
</a>
<div class="card-body pt-1 px-0">
<p class="text-muted mb-1">Uncle Chipps</p>
<h6 class="card-title fw-bold">Spicy Treat Sweet Potato Chipps</h6>
<p class="card-text text-muted">50 g</p>
</div>
<div class="card-footer bg-transparent border-0 d-flex align-items-end justify-content-between p-0">
<div>
<del class="small text-muted">$25</del>
<h6 class="fw-bold m-0">$20</h6>
</div>
<a data-bs-toggle="offcanvas" data-bs-target="#mycart" aria-controls="mycart" href="cart.html" class="btn btn-outline-danger btn-sm rounded-3 fw-bold px-4 osahan-new-btn">ADD</a>
</div>
</div>
</div>

<div class="top-picks-item">
<div class="card bg-transparent border-0 overflow-hidden h-100 mx-2">
<a href="product-detail.html" class="link-dark">
<div class="rounded-4 p-2 product-box bg-white">
<img src="img/list/13.jpeg" alt="" class="img-fluid h-100 d-block mx-auto">
</div>
</a>
<div class="card-body pt-1 px-0">
<p class="text-muted mb-1">Tata</p>
<h6 class="card-title fw-bold">Tata Gold with 15% Long Leaves</h6>
<p class="card-text text-muted">750 g</p>
</div>
<div class="card-footer bg-transparent border-0 d-flex align-items-end justify-content-between p-0">
<div>
<del class="small text-muted">$470</del>
<h6 class="fw-bold m-0">$323</h6>
</div>
<a data-bs-toggle="offcanvas" data-bs-target="#mycart" aria-controls="mycart" href="cart.html" class="btn btn-outline-danger btn-sm rounded-3 fw-bold px-4 osahan-new-btn">ADD</a>
</div>
</div>
</div>

<div class="top-picks-item">
<div class="card bg-transparent border-0 overflow-hidden h-100 mx-2">
<a href="product-detail.html" class="link-dark">
<div class="rounded-4 p-2 product-box bg-white">
<img src="img/list/14.jpeg" alt="" class="img-fluid h-100 d-block mx-auto">
</div>
</a>
<div class="card-body pt-1 px-0">
<p class="text-muted mb-1">Kurkure</p>
<h6 class="card-title fw-bold">Kurkure Namkeen - Masala Munch</h6>
<p class="card-text text-muted">90 g</p>
</div>
<div class="card-footer bg-transparent border-0 d-flex align-items-end justify-content-between p-0">
<div>
<del class="small text-muted">$10</del>
<h6 class="fw-bold m-0">$8</h6>
</div>
<a data-bs-toggle="offcanvas" data-bs-target="#mycart" aria-controls="mycart" href="cart.html" class="btn btn-outline-danger btn-sm rounded-3 fw-bold px-4 osahan-new-btn">ADD</a>
</div>
</div>
</div>

<div class="top-picks-item">
<div class="card bg-transparent border-0 overflow-hidden h-100 mx-2">
<a href="product-detail.html" class="link-dark">
<div class="rounded-4 p-2 product-box bg-white">
<img src="img/list/15.jpeg" alt="" class="img-fluid h-100 d-block mx-auto">
</div>
</a>
<div class="card-body pt-1 px-0">
<p class="text-muted mb-1">Dettol</p>
<h6 class="card-title fw-bold">Germ Protection Bathing Soap Bar</h6>
<p class="card-text text-muted">75 g</p>
</div>
<div class="card-footer bg-transparent border-0 d-flex align-items-end justify-content-between p-0">
<div>
<del class="small text-muted">$179</del>
<h6 class="fw-bold m-0">$169</h6>
</div>
<a data-bs-toggle="offcanvas" data-bs-target="#mycart" aria-controls="mycart" href="cart.html" class="btn btn-outline-danger btn-sm rounded-3 fw-bold px-4 osahan-new-btn">ADD</a>
</div>
</div>
</div>

<div class="top-picks-item">
<div class="card bg-transparent border-0 overflow-hidden h-100 mx-2">
<a href="product-detail.html" class="link-dark">
<div class="rounded-4 p-2 product-box bg-white">
<img src="img/list/16.jpeg" alt="" class="img-fluid h-100 d-block mx-auto">
</div>
</a>
<div class="card-body pt-1 px-0">
<p class="text-muted mb-1">Nescafe</p>
<h6 class="card-title fw-bold">Nescafé Classic Instant Powder Coffee</h6>
<p class="card-text text-muted">200 g</p>
</div>
<div class="card-footer bg-transparent border-0 d-flex align-items-end justify-content-between p-0">
<div>
<del class="small text-muted">$700</del>
<h6 class="fw-bold m-0">$640</h6>
</div>
<a data-bs-toggle="offcanvas" data-bs-target="#mycart" aria-controls="mycart" href="cart.html" class="btn btn-outline-danger btn-sm rounded-3 fw-bold px-4 osahan-new-btn">ADD</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<div class="offcanvas offcanvas-end my-cart-width" tabindex="-1" id="location">
<div class="offcanvas-header px-4 py-3 d-flex align-items-center justify-content-start gap-3 bg-danger text-white">
<a href="#" class="link-light" data-bs-dismiss="offcanvas" aria-label="Close"><i class="lni lni-arrow-left fs-5 d-flex"></i></a>
<h6 class="offcanvas-title" id="locationLabel">Enter your area or apartment name</h6>
</div>
<div class="offcanvas-body p-0">

<div class="p-4 bg-light">
<div class="input-group bg-white rounded-3 border py-1">
<a href="#" class="input-group-text bg-transparent border-0 rounded-0 px-3"><i class="icofont-search"></i></a>
<input type="text" class="form-control bg-transparent border-0 rounded-0 ps-0" placeholder="Try J P Nagar, Andheri West etc.." aria-label="Try J P Nagar, Andheri West etc..">
</div>
<a href="#" class="link-dark" data-bs-dismiss="offcanvas" aria-label="Close">
<div class="d-flex align-items-center gap-2 text-danger pt-3">
<i class="icofont-location-arrow"></i>
<p class="m-0">Use my Current location</p>
</div>
</a>
</div>

<div class="border-bottom p-4">
<p class="text-black text-uppercase small">Saved Addresses</p>
<div class="d-flex align-items-center justify-content-between">
<div class="w-75">
<a href="#" class="link-dark" data-bs-dismiss="offcanvas" aria-label="Close">
<div class="d-flex align-items-center gap-3 osahan-mb-1">
<i class="lni lni-home text-muted fs-5"></i>
<div>
<h6 class="fw-bold mb-1">Home</h6>
<p class="text-muted text-truncate mb-0 small">H.No. 2834 Street, 784 Sector, Ludhiana, Punjab</p>
</div>
</div>
</a>
</div>
<a href="#" class="link-dark">
<div class="bg-light rounded-circle icon-sm">
<i class="icofont-share fs-5 text-dark-emphasis"></i>
</div>
</a>
</div>
</div>

<div class="p-4">
<p class="text-black text-uppercase small">Recent Searches</p>
<a href="#" class="link-dark" data-bs-dismiss="offcanvas" aria-label="Close">
<div class="d-flex align-items-center gap-3 osahan-mb-1">
<i class="lni lni-map-marker text-muted fs-5"></i>
<div>
<h6 class="fw-bold mb-1">Ludhiana</h6>
<p class="text-muted text-truncate mb-0 small">87997 Street, 784 Sector, Ludhiana, Punjab</p>
</div>
</div>
</a>
</div>
</div>
</div>

<div class="modal fade" id="login" aria-hidden="true" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content bg-white border-0 overflow-hidden rounded-4">
<div class="modal-body p-0">
<div class="row g-0">
<div class="col-lg-4 d-none d-lg-block">
<div class="p-4 d-flex bg-warning-subtle align-items-center flex-column text-center gap-4 justify-content-center h-100">
<img src="img/logo.png" alt="" class="img-fluid mb-auto px-4">
<div>
<h5 class="fw-bold">Welcome to Eatreal</h5>
<p class="m-0">Download the app get free food &amp; <span class="fw-bold text-success">$50</span> off on your first order.</p>
</div>
<a href="#" class="btn btn-sm w-100 btn-warning mt-auto rounded-pill">Download App</a>
</div>
</div>
<div class="col-lg-8 p-4">
<button type="button" class="btn-close float-end shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
<div class="mb-4 pe-5">
<h6 class="fw-bold text-danger mb-1">Phone Number Verification</h6>
</div>
<form>
<div class="text-start">
<p class="lh-base pb-2 text-muted fs-6 mb-1">Enter your phone number to Login/Sign up</p>
<div class="input-group bg-white shadow-sm rounded-3 border py-2 mb-4">
<a href="#" class="input-group-text bg-transparent border-0 rounded-0 text-black px-3"><i class="lni lni-mobile me-1"></i> +91</a>
<input type="number" class="form-control bg-transparent border-0 rounded-0 ps-0" placeholder="Type your number" value="">
</div>
<a href="#" class="btn btn-danger fw-bold py-3 px-4 w-100 rounded-4 shadow" data-bs-target="#verify" data-bs-toggle="modal">Next</a>
<div class="mt-3">
<p class="text-muted mb-1">By continuing, you agree to our</p>
<span class="small">
<a href="#" class="text-decoration-underline me-2">Terms of service</a>
<a href="#" class="text-decoration-underline ">Privacy Policy</a>
</span>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="verify" aria-hidden="true" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content bg-white border-0 overflow-hidden rounded-4">
<div class="modal-body p-0">
<div class="row g-0">
<div class="col-lg-4 d-none d-lg-block">
<div class="p-4 d-flex bg-warning-subtle align-items-center flex-column text-center gap-4 justify-content-center h-100">
<img src="img/logo.png" alt="" class="img-fluid mb-auto px-4">
<div>
<h5 class="fw-bold">Welcome to Eatreal</h5>
<p class="m-0">Download the app get free food &amp; <span class="fw-bold text-success">$50</span> off on your first order.</p>
</div>
<a href="#" class="btn btn-sm w-100 btn-warning mt-auto rounded-pill">Download App</a>
</div>
</div>
<div class="col-lg-8 p-4">
<div class="mb-4">
<h6 class="fw-bold d-flex align-items-center text-danger mb-1"><a class="me-3" href="#" data-bs-target="#login" data-bs-toggle="modal"><i class="lni lni-arrow-left fs-5 d-flex"></i></a> Phone Number Verification</h6>
</div>
<form>
<div class="text-start">
<p class="lh-base pb-2 text-muted fs-6 mb-1">Enter 4 digit code sent to your phone<br>+91-+91 1234 567890</p>
<div class="row mb-4">
<div class="col-3">
<input type="text" class="form-control text-center bg-white shadow-sm rounded-3 border py-2 fs-4" value="5" maxlength="1">
</div>
<div class="col-3">
<input type="text" class="form-control text-center bg-white shadow-sm rounded-3 border py-2 fs-4" value="2" maxlength="1">
</div>
<div class="col-3">
<input type="text" class="form-control text-center bg-white shadow-sm rounded-3 border py-2 fs-4" value="8" maxlength="1">
</div>
<div class="col-3">
<input type="text" class="form-control text-center bg-white shadow-sm rounded-3 border py-2 fs-4" value="1" maxlength="1">
</div>
</div>
<a href="#" class="btn btn-danger fw-bold py-3 px-4 w-100 rounded-4 shadow" data-bs-toggle="modal" data-bs-target="#successfull">Next</a>
<div class="mt-3">
<span class="small d-flex justify-content-between">
<a href="#" class="text-decoration-underline me-2">Resend Code</a>
<small class="text-muted">Resend Code (in <b id="timer">60</b> secs)</small>
</span>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="successfull" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content bg-white border-0 overflow-hidden rounded-4">
<div class="modal-body border-0 rounded-3 text-center p-5">
<img src="img/successfull.png" alt="" class="img-fluid w-25">
<p class="fw-bold text-danger mb-0 mt-4">Welcome to Eatreal</p>
<h5 class="text-success mb-3 mt-1">Your Login is Successfull</h5>
<p class="mb-4">Download the app get free food &amp; <span class="fw-bold text-success">$50</span> off on your first order.</p>
<a href="listing.html" class="btn fw-bold py-2 px-4 btn-danger mt-auto rounded-pill">Shop Now</a>
</div>
</div>
</div>
</div>

<div class="offcanvas offcanvas-end my-cart-width" tabindex="-1" id="mycart">
<div class="offcanvas-header px-4 py-3">
<h5 class="offcanvas-title fw-bold">My Cart</h5>
<button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body p-0">
<div class="bg-light px-4 py-3">
<h6 class="fw-bold mb-1">Delivery in 10 minutes</h6>
<p class="text-muted m-0">3 items</p>
</div>

<div class="px-4 py-3">
<div class="row">
<div class="col-3">
<img src="img/list/20.jpeg" alt="" class="img-fluid border rounded-4">
</div>
<div class="col-9">
<h6 class="fw-bold mb-1">Haldiram's Sev Bhujia</h6>
<p class="text-muted">500g</p>
<div class="d-flex align-items-center justify-content-between">
<h6 class="fw-bold m-0"><del class="text-muted small fw-normal">$55</del><br>$50</h6>
<div class="input-group border rounded overflow-hidden value">
<input type="button" value="-" class="button-minus btn btn-light btn-sm border-end col" data-field="quantity">
<input type="text" value="1" name="quantity" class="quantity-field form-control form-control-sm col text-center shadow-none border-0">
<input type="button" value="+" class="button-plus btn btn-light btn-sm border-start col" data-field="quantity">
</div>
</div>
</div>
</div>
</div>

<div class="px-4 py-3">
<div class="row">
<div class="col-3">
<img src="img/list/19.jpeg" alt="" class="img-fluid border rounded-4">
</div>
<div class="col-9">
<h6 class="fw-bold mb-1">NutriChoice Digestive</h6>
<p class="text-muted">250g</p>
<div class="d-flex align-items-center justify-content-between">
<h6 class="fw-bold m-0"><del class="text-muted small fw-normal">$25</del><br>$20</h6>
<div class="input-group border rounded overflow-hidden value">
<input type="button" value="-" class="button-minus btn btn-light btn-sm border-end col" data-field="quantity">
<input type="text" value="1" name="quantity" class="quantity-field form-control form-control-sm col text-center shadow-none border-0">
<input type="button" value="+" class="button-plus btn btn-light btn-sm border-start col" data-field="quantity">
</div>
</div>
</div>
</div>
</div>

<div class="px-4 py-3">
<div class="row">
<div class="col-3">
<img src="img/list/18.jpeg" alt="" class="img-fluid border rounded-4">
</div>
<div class="col-9">
<h6 class="fw-bold mb-1">Cadbury 5 Star Chocolate</h6>
<p class="text-muted">300g</p>
<div class="d-flex align-items-center justify-content-between">
<h6 class="fw-bold m-0"><del class="text-muted small fw-normal">$65</del><br>$60</h6>
<div class="input-group border rounded overflow-hidden value">
<input type="button" value="-" class="button-minus btn btn-light btn-sm border-end col" data-field="quantity">
<input type="text" value="1" name="quantity" class="quantity-field form-control form-control-sm col text-center shadow-none border-0">
<input type="button" value="+" class="button-plus btn btn-light btn-sm border-start col" data-field="quantity">
</div>
</div>
</div>
</div>
</div>
<div class="p-4 bg-light">
<div class="d-flex align-items-center justify-content-between mb-1">
<p class="text-muted m-0">MRP</p>
<p class="m-0">$50.00</p>
</div>
<div class="d-flex align-items-center justify-content-between mb-1">
<p class="text-muted m-0">Product Discount</p>
<p class="m-0">$20.00</p>
</div>
<div class="d-flex align-items-center justify-content-between mb-3">
<p class="text-muted m-0">Delivery Charges</p>
<p class="text-info m-0">$60.00</p>
</div>
<div class="d-flex align-items-center justify-content-between">
<h6 class="fw-bold m-0">Grand Total</h6>
<p class="fw-bold text-danger m-0">$130.00</p>
</div>
</div>
</div>
<div class="offcanvas-footer p-4">
<a href="#" class="btn btn-danger fw-bold d-flex align-items-center justify-content-between py-3 px-4 w-100 rounded-4 shadow" data-bs-toggle="offcanvas" data-bs-target="#myaddress" aria-controls="myaddress">3 items &#183; $130
<span class="text-uppercase">Proceed<i class="icofont-double-right ms-1"></i></span>
</a>
</div>
</div>

<div class="offcanvas offcanvas-end my-cart-width" tabindex="-1" id="myaddress">
<div class="offcanvas-header px-4 py-3">
<h5 class="offcanvas-title fw-bold" id="myaddressLabel">My Address</h5>
<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body p-0">
<div class="bg-light">
<a href="#" class="link-dark py-3 px-4 osahan-location text-decoration-none d-flex align-items-center gap-3 text-start flex-shrink-0" data-bs-toggle="modal" data-bs-target="#addaddress">
<i class="lni lni-circle-plus text-danger fs-4"></i>
<div class="lh-sm">
<h6 class="fw-bold mb-0">Add a new address in</h6>
<small class="text-muted mb-0 align-bottom small">Ludhiana, Punjab, India</small>
</div>
</a>
</div>
<div class="py-3 px-4">
<p class="text-muted m-0">Choose Delivery Address</p>
</div>
<div class="px-4 py-2 bg-light">
<div class="form-check osahan-radio-box-action osahan-radio-box w-100 bg-white border p-3 my-3 rounded-4">
<input class="form-check-input" type="radio" name="aaflexRadioDefault" id="aaflexRadioDefault1">
<label class="form-check-label" for="aaflexRadioDefault1"></label>
<div class="osahan-radio-box-inner">
<div class="d-flex align-items-center justify-content-between bg-white">
<div class="w-75">
<div class="d-flex align-items-center gap-3 osahan-mb-1">
<i class="lni lni-home text-muted fs-5"></i>
<div class="pe-4 overflow-hidden">
<h6 class="fw-bold mb-1">Mr David - <span class="fw-light small">Home</span></h6>
<p class="text-muted text-truncate mb-0 small">H.No. 2834 Street, 784 Sector, Ludhiana, Punjab</p>
</div>
</div>
</div>
<div class="ms-auto gap-2 mt-auto text-center small">
<a href="#" class="small d-flex align-items-center gap-1" data-bs-toggle="modal" data-bs-target="#addaddress"><i class="lni lni-pencil-alt d-flex"></i>Edit</a>
</div>
</div>
</div>
</div>
<div class="form-check osahan-radio-box-action osahan-radio-box w-100 bg-white border p-3 my-3 rounded-4">
<input class="form-check-input" type="radio" name="aaflexRadioDefault" id="aaflexRadioDefault2" checked="">
<label class="form-check-label" for="aaflexRadioDefault2"></label>
<div class="osahan-radio-box-inner">
<div class="d-flex align-items-center justify-content-between bg-white">
<div class="w-75">
<div class="d-flex align-items-center gap-3 osahan-mb-1">
<i class="lni lni-briefcase text-muted fs-5"></i>
<div class="pe-4 overflow-hidden">
<h6 class="fw-bold mb-1">Black Smith - <span class="fw-light small">Office</span></h6>
<p class="text-muted text-truncate mb-0 small">9878, 784 Sector, Ludhiana, Punjab</p>
</div>
</div>
</div>
<div class="ms-auto gap-2 mt-auto text-center small">
<a href="#" class="small d-flex align-items-center gap-1" data-bs-toggle="modal" data-bs-target="#addaddress"><i class="lni lni-pencil-alt d-flex"></i>Edit</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="offcanvas-footer p-4">
<a href="#" class="btn btn-danger fw-bold py-3 px-4 w-100 rounded-4 shadow" data-bs-toggle="offcanvas" data-bs-target="#mycardwithaddress" aria-controls="mycardwithaddress">Done</a>
</div>
</div>

<div class="offcanvas offcanvas-end my-cart-width" tabindex="-1" id="mycardwithaddress">
<div class="offcanvas-header px-4 py-3">
<h5 class="offcanvas-title fw-bold">My Cart</h5>
<button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body p-0">
<div class="bg-light px-4 py-3">
<h6 class="fw-bold mb-1">Delivery in 10 minutes</h6>
<p class="text-muted m-0">3 items</p>
</div>

<div class="px-4 py-3">
<div class="row">
<div class="col-3">
<img src="img/list/20.jpeg" alt="" class="img-fluid border rounded-4">
</div>
<div class="col-9">
<h6 class="fw-bold mb-1">Haldiram's Sev Bhujia</h6>
<p class="text-muted">500g</p>
<div class="d-flex align-items-center justify-content-between">
<h6 class="fw-bold m-0"><del class="text-muted small fw-normal">$55</del><br>$50</h6>
<div class="input-group border rounded overflow-hidden value">
<input type="button" value="-" class="button-minus btn btn-light btn-sm border-end col" data-field="quantity">
<input type="text" value="1" name="quantity" class="quantity-field form-control form-control-sm col text-center shadow-none border-0">
<input type="button" value="+" class="button-plus btn btn-light btn-sm border-start col" data-field="quantity">
</div>
</div>
</div>
</div>
</div>

<div class="px-4 py-3">
<div class="row">
<div class="col-3">
<img src="img/list/19.jpeg" alt="" class="img-fluid border rounded-4">
</div>
<div class="col-9">
<h6 class="fw-bold mb-1">NutriChoice Digestive</h6>
<p class="text-muted">250g</p>
<div class="d-flex align-items-center justify-content-between">
<h6 class="fw-bold m-0"><del class="text-muted small fw-normal">$25</del><br>$20</h6>
<div class="input-group border rounded overflow-hidden value">
<input type="button" value="-" class="button-minus btn btn-light btn-sm border-end col" data-field="quantity">
<input type="text" value="1" name="quantity" class="quantity-field form-control form-control-sm col text-center shadow-none border-0">
<input type="button" value="+" class="button-plus btn btn-light btn-sm border-start col" data-field="quantity">
</div>
</div>
</div>
</div>
</div>

<div class="px-4 py-3">
<div class="row">
<div class="col-3">
<img src="img/list/18.jpeg" alt="" class="img-fluid border rounded-4">
</div>
<div class="col-9">
<h6 class="fw-bold mb-1">Cadbury 5 Star Chocolate</h6>
<p class="text-muted">300g</p>
<div class="d-flex align-items-center justify-content-between">
<h6 class="fw-bold m-0"><del class="text-muted small fw-normal">$65</del><br>$60</h6>
<div class="input-group border rounded overflow-hidden value">
<input type="button" value="-" class="button-minus btn btn-light btn-sm border-end col" data-field="quantity">
<input type="text" value="1" name="quantity" class="quantity-field form-control form-control-sm col text-center shadow-none border-0">
<input type="button" value="+" class="button-plus btn btn-light btn-sm border-start col" data-field="quantity">
</div>
</div>
</div>
</div>
</div>
<div class="p-4 bg-light">
<div class="d-flex align-items-center justify-content-between mb-1">
<p class="text-muted m-0">MRP</p>
<p class="m-0">$50.00</p>
</div>
<div class="d-flex align-items-center justify-content-between mb-1">
<p class="text-muted m-0">Product Discount</p>
<p class="m-0">$20.00</p>
</div>
<div class="d-flex align-items-center justify-content-between mb-3">
<p class="text-muted m-0">Delivery Charges</p>
<p class="text-info m-0">$60.00</p>
</div>
<div class="d-flex align-items-center justify-content-between">
<h6 class="fw-bold m-0">Grand Total</h6>
<p class="fw-bold text-danger m-0">$130.00</p>
</div>
</div>
</div>
<div class="offcanvas-footer border-top p-4">
<div class="d-flex align-items-center gap-3 pb-3">
<i class="lni lni-home fs-4"></i>
<div>
<h6 class="fw-bold mb-1">Delivering to home</h6>
<p class="text-muted small m-0">1st Block 1st Cross, Punjab</p>
</div>
<a href="#" data-bs-toggle="offcanvas" data-bs-target="#myaddress" aria-controls="myaddress" class="ms-auto">Change</a>
</div>
<a href="checkout.html" class="btn btn-danger fw-bold d-flex align-items-center justify-content-between py-3 px-4 w-100 rounded-4 shadow">3 items &#183; $130 <span>Proceed To Pay<i class="icofont-double-right ms-1"></i></span>
</a>
</div>
</div>

<div class="modal fade" id="addaddress" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content border-0 rounded-4 overflow-hidden">
<div class="modal-body p-0">
<div class="row g-0">
<div class="col-lg-6">
<div class="ratio ratio-1x1 h-100">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1750606.6319414608!2d74.2897923755259!3d31.02197051025034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391964aa569e7355%3A0x8fbd263103a38861!2sPunjab!5e0!3m2!1sen!2sin!4v1677160520792!5m2!1sen!2sin" class="border-0"></iframe>
</div>
</div>
<div class="col-lg-6 p-4">
<button type="button" class="btn-close float-end shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
<div class="mb-3 pe-5">
<h5 class="fw-bold mb-1">Enter complete address</h5>
<p class="text-muted small m-0">This allow us to find you easily and give you timely delivery experience </p>
</div>
<form>
<div class="row g-3 mb-3">
<div class="col-4">
<div class="form-floating h-100">
<select class="form-select" id="floatingSelectGrid">
<option value="1" selected="">Mr</option>
<option value="2">Mrs</option>
<option value="3">Miss</option>
</select>
<label for="floatingSelectGrid">Sr. Name</label>
</div>
</div>
<div class="col-8">
<div class="form-floating h-100">
<input type="text" class="form-control" id="floatingInput" placeholder="name" value="David">
<label for="floatingInput">Receiver's name</label>
</div>
</div>
</div>
<div class="form-floating mb-3">
<input type="text" class="form-control" id="floatingInput1" placeholder="address" value="87997 Street, 784 Sector">
<label for="floatingInput1">Flat/House/Office No.</label>
</div>
<div class="form-floating mb-3">
<input type="text" class="form-control" id="floatingInput2" placeholder="street" value="Ludhiana, Punjab">
<label for="floatingInput2">Street/Society/Office Name</label>
</div>
<div class="mb-4">
<p class="text-muted small mb-2">Save address as</p>
<div class="d-flex align-items-center gap-2">
<input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked="">
<label class="btn btn-outline-secondary btn-sm" for="btnradio1">Home</label>
<input type="radio" class="btn-check" name="btnradio" id="btnradio2">
<label class="btn btn-outline-secondary btn-sm" for="btnradio2">Office</label>
<input type="radio" class="btn-check" name="btnradio" id="btnradio3">
<label class="btn btn-outline-secondary btn-sm" for="btnradio3">Other</label>
</div>
</div>
<a href="#" class="btn btn-danger fw-bold py-3 px-4 w-100 rounded-4 shadow" data-bs-dismiss="modal" aria-label="Close">Save Address</a>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="footer bg-white shadow mt-auto border-top">
<div class="d-flex align-items-center justify-content-between py-1">
<a href="home" class="link-dark text-center col py-2 p-1">
<i class="bi bi-house h3 m-0"></i>
<p class="small m-0 pt-1">Home</p>
</a>
<a href="https://shopee.co.id/product/796875347/22545852389?gad_source=4&gclid=CjwKCAiA29auBhBxEiwAnKcSquO1WhCYcsOEwsnek41kmwZlMQb5Fliek-q2VIR4PfEBY4BKjOn3HxoCjLMQAvD_BwE" class="text-muted text-center col py-2 p-1">
<i class="bi bi-shop h3 m-0"></i>
<p class="small m-0 pt-1">Shop</p>
</a>


<a href="https://www.facebook.com/arip.seisar" class="text-muted text-center col py-2 p-1">
<i class="bi bi-person h3 m-0"></i>
<p class="small m-0 pt-1">Profile</p>
</a>
<a href="/logout" class="text-muted text-center col py-2 p-1">
<i class="bi bi-geo-alt h3 m-0"></i>
<p class="small m-0 pt-1">Logout</p>
</a>
</div>
</div>

<script src="{{ asset('vender/bootstrap/js/bootstrap.bundle.min.js') }}" type="5948870de05fe4f942bef8f7-text/javascript') }}"></script>

<script src="{{ asset('vender/jquery/jquery.min.js') }}" type="5948870de05fe4f942bef8f7-text/javascript') }}"></script>

<script src="{{ asset('vender/slick/slick/slick.min.js') }}" type="5948870de05fe4f942bef8f7-text/javascript') }}"></script>

<script src="{{ asset('vjs/quantity.js')}}" type="5948870de05fe4f942bef8f7-text/javascript') }}"></script>

<script src="{{ asset('js/script.js')}}" type="5948870de05fe4f942bef8f7-text/javascript') }}"></script>
<script src="{{ asset(' ../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min-1.js')}}" data-cf-settings="5948870de05fe4f942bef8f7-|49" defer=""></script><script defer="" src="{{ asset('../../beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317-1') }}" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"858bc067fdd59e38","r":1,"version":"2024.2.1","token":"dd471ab1978346bbb991feaa79e6ce5c"}' crossorigin="anonymous"></script>
</body>
</html>