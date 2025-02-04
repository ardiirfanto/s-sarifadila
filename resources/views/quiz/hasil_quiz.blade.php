@extends('layouts.default')
@section('title')
    Nilai Kuis
@endsection
@section('content')
    <script src="{{ asset('js/bg-music-nilai.js') }}"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <style>
.card-gradient-bg {
  background: #0cebeb;
  background: -webkit-gradient(linear, left top, right top, from(#29ffc6), color-stop(#20e3b2), to(#0cebeb));
  background: linear-gradient(to right, #9b59b6, #8e44ad, #6c3483);
}
    </style>

<div class="card card-gradient-bg">
        <div class="col-12 flex flex-col h-screen justify-center items-center gap-2">
            <lottie-player src="{{ asset('jsons/trophy.json') }}" class="transparent" speed="1"
                style="width: 200px; height: 200px;" loop autoplay>
            </lottie-player>
            <h1 class=" text-white md:text-3xl text-2xl text-center uppercase text-slate-700">Nilai Kamu Adalah...</h1>
            <p class="text-white text-3xl font-bold text-center">{{ $nilai }}</p>
            <a href="{{ route('home') }}" class="btn m-1 btn-warning text-black text-md font-semibold p-2 rounded-lg">
                Kembali
            </a>
        </div>
    </div>
@endsection
