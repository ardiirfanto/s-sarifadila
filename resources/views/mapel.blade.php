@extends('layouts.materi')

@section('content')
    <div class="page-content-wrapper">

        <!-- Tiny Slider One Wrapper -->
        <div class="tiny-slider-one-wrapper">
            <div class="tiny-slider-one">
                <!-- Single Hero Slide -->
                <div>
                    <div class="single-hero-slide bg-overlay">
                        <div class="h-100 d-flex align-items-center text-center">
                            <div id="video-container" id="videoBg">
                                <iframe
                                    src="https://www.youtube.com/embed/{{ $mapel->video }}?autoplay=1&mute=1&showinfo=0&controls=0"
                                    frameborder="0">
                                </iframe>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- <div>


            <!-- Single Hero Slide --> --}}

            </div>
        </div>

        {{-- Video BG --}}
        <div>

        </div>

        <div class="pt-3"></div>

        <div class="top-products-area" style="background-image: url('img/bg-img/23gi.png')">
            <div class="container">
                <div class="row g-3">
                    {{-- Halaman BAB --}}
                    @foreach ($data as $item)
                        <div class="col-6 col-sm-4 col-lg-3 btn-click" id="bab-{{ $item->id }}">
                            <div class="card single-product-card animate-slide-up">
                                <div class="card-body p-3">
                                    <div class="product-thumbnail d-block">
                                        <img style="width: 100%;height:150px;object-fit:cover"
                                            src="{{ asset('assets/img/materi/' . $item->gambar) }}" alt="">
                                        <span class="badge bg-danger">{{ $item->judul }}</span>
                                    </div>
                                    <span class="product-title d-block text-truncate">BAB {{ $item->bab }}</span>
                                    <button
                                        onclick="animateBtnPelajaran('bab-{{ $item->id }}','{{ url('submateri/' . $item->id) }}')"
                                        class="btn btn-primary rounded-pill btn-sm">BUKA BAB
                                        {{ $item->bab }}</button>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- Halaman SKOR --}}
                    <div class="col-6 col-sm-4 col-lg-3 btn-click" id="bab-skor">
                        <div class="card single-product-card animate-slide-up">
                            <div class="card-body p-3">
                                <!-- Product Thumbnail -->
                                <div class="product-thumbnail d-block">
                                    <img style="width: 100%;height:150px;object-fit:cover"
                                        src="{{ asset('img/bg-img/p6.jpg') }}" alt="">
                                </div>
                                <!-- Product Title -->
                                <span class="product-title d-block text-truncate" href="#">SKOR</span>
                                <!-- Product Price -->
                                <button onclick="animateBtnPelajaran('bab-skor','nilai')"
                                    class="btn btn-primary rounded-pill btn-sm">BUKA SKOR</button>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
