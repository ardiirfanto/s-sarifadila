@extends('layouts.materi')

@section('content')
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
        {{-- <button onclick="soundBtn()" class="btn btn-primary">Sound</button> --}}

        <div class="pt-3">

        </div>

        <div class="top-products-area" style="background-image: url('img/bg-img/23gi.png')">
            <div class="container">
                <div class="row g-3">
                    {{-- Halaman Mapel --}}
                    @foreach ($data as $item)
                        <div class="col-6 col-sm-4 col-lg-3 btn-click" id="bab-{{ $item->id }}">
                            <div class="card single-product-card animate-slide-up">
                                <div class="card-body p-3">
                                    <div class="product-thumbnail d-block">
                                        <img style="width: 100%;height:150px;object-fit:cover"
                                            src="{{ asset('assets/img/mapel/' . $item->icon) }}" alt="">
                                        <span class="badge bg-danger">{{ $item->judul }}</span>
                                    </div>
                                    <span class="product-title d-block text-truncate">{{ $item->mapel }}</span>
                                    <p class="text-muted mx-0">{{ $item->name }}</p>
                                    <button
                                        onclick="animateBtnPelajaran('bab-{{ $item->id }}','materi/{{ $item->id }}')"
                                        class="btn btn-primary rounded-pill btn-sm ">BUKA MAPEL
                                        {{ $item->bab }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="container mt-3">
                        <div class="card card-round btn-click">
                            <div class="card-body d-flex align-items-center direction-rtl">
                                <div class="card-img-wrap">
                                    <img src="img/bg-img/2.jpg" alt="">
                                </div>
                                <div class="card-content">
                                    <h5 class="mb-3">Pendahuluan</h5>
                                    <button onclick="animateBtnPelajaran('bab-skor','rangkuman')"
                                        class="btn btn-warning">BUKA
                                        Pendahuluan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">

                        <div class="element-heading mt-3">
                        </div>
                    </div>
                    <div class="container">
                        <div class="card card-round ">
                            <div class="card-body d-flex align-items-center direction-rtl ">
                                <div class="card-img-wrap">
                                    <img src="img/bg-img/2i.jpg" alt="">
                                </div>
                                <div class="card-content">
                                    <h5 class="mb-3">Kuis</h5>
                                    <livewire:login-quiz-form />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="element-heading mt-3">
                    </div>
                </div>
                <div class="container">
                    <div class="card card-round btn-click">
                        <div class="card-body d-flex align-items-center direction-rtl">
                            <div class="card-img-wrap">
                                <img src="img/bg-img/2ii.jpg" alt="">
                            </div>
                            <div class="card-content">
                                <h5 class="mb-3">Petunjuk</h5>
                                <button onclick="animateBtnPelajaran('bab-skor','credit')" class="btn btn-warning">BUKA
                                    Petunjuk</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="card-body direction-rtl p-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
