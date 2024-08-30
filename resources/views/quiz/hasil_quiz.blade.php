@extends('layouts.default')
@section('title')
    Nilai Kuis
@endsection
@section('content')
    <script src="{{ asset('js/bg-music-nilai.js') }}"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <div class="row ">
        <div class="col-12 flex flex-col h-screen justify-center items-center gap-2">
            <lottie-player src="{{ asset('jsons/trophy.json') }}" background="transparent" speed="1"
                style="width: 200px; height: 200px;" loop autoplay>
            </lottie-player>
            <h1 class="md:text-3xl text-2xl text-center uppercase text-slate-700">Nilai kamu:</h1>
            <p class="text-3xl font-bold text-center">{{ $nilai }}</p>
            <a href="{{ route('home') }}" class="bg-red-600 text-white text-md font-semibold p-2 rounded-lg">
                Kembali
            </a>
        </div>
    </div>
@endsection
