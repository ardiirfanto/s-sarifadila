@extends('layouts.default')

@section('content')
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <main class="grid lg:grid-cols-2 grid-cols-1 md:place-items-start place-items-center md:px-8 px-5">
        <aside class="md:w-1/2 lg:h-2/5 w-full lg:py-9 py-12 relative">
            <div class="absolute w-full">
                <button data-link="home" class="clickSound w-full flex shadow-lg mb-8 gap-8 items-center bg-white lg:text-xl text-lg rounded-full xl:hover:ms-12 xl:hover:my-10 hover:scale-105 transition-all">
                    <div class="shadow-md border p-2 bg-white rounded-full top-0 left-0">
                        <svg class="w-10 text-white bg-sky-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                        </svg>                    
                    </div>
                    <span class="font-bold uppercase text-start">Profil</span>
                </button>
                <button data-link="link" class="clickSound w-full flex shadow-lg mb-8 gap-8 items-center bg-white lg:text-xl text-lg rounded-full xl:hover:ms-12 xl:hover:my-10 hover:scale-105 transition-all">
                    <div class="shadow-md border p-2 bg-white rounded-full top-0 left-0">
                        <svg class="w-10 text-white bg-sky-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                        </svg>                    
                    </div>
                    <span class="font-bold uppercase text-start">Kompetensi Dasar</span>
                </button>
                <button data-link="projek" class="clickSound w-full flex shadow-lg mb-8 gap-8 items-center bg-white lg:text-xl text-lg rounded-full xl:hover:ms-12 xl:hover:my-10 hover:scale-105 transition-all">
                    <div class="shadow-md border p-2 bg-white rounded-full top-0 left-0">
                        <svg class="w-10 text-white bg-sky-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                        </svg>                    
                    </div>
                    <span class="font-bold uppercase text-start">Indikator</span>
                </button>
                <button data-link="pelajaran-1" class="clickSound w-full flex shadow-lg mb-8 gap-8 items-center bg-white lg:text-xl text-lg rounded-full xl:hover:ms-12 xl:hover:my-10 hover:scale-105 transition-all">
                    <div class="shadow-md border p-2 bg-white rounded-full top-0 left-0">
                        <svg class="w-10 text-white bg-sky-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                        </svg>                    
                    </div>
                    <span class="font-bold uppercase text-start">Materi</span>
                </button>
                <button data-link="projek" class="clickSound w-full flex shadow-lg mb-8 gap-8 items-center bg-white lg:text-xl text-lg rounded-full xl:hover:ms-12 xl:hover:my-10 hover:scale-105 transition-all">
                    <div class="shadow-md border p-2 bg-white rounded-full top-0 left-0">
                        <svg class="w-10 text-white bg-sky-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                        </svg>                    
                    </div>
                    <span class="font-bold uppercase text-start">Video</span>
                </button>
                <button data-link="projek" class="clickSound w-full flex shadow-lg mb-8 gap-8 items-center bg-white lg:text-xl text-lg rounded-full xl:hover:ms-12 xl:hover:my-10 hover:scale-105 transition-all">
                    <div class="shadow-md border p-2 bg-white rounded-full top-0 left-0">
                        <svg class="w-10 text-white bg-sky-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                        </svg>                    
                    </div>
                    <span class="font-bold uppercase text-start">Evaluasi</span>
                </button>
                <button data-link="projek" class="clickSound w-full flex shadow-lg mb-8 gap-8 items-center bg-white lg:text-xl text-lg rounded-full xl:hover:ms-12 xl:hover:my-10 hover:scale-105 transition-all">
                    <div class="shadow-md border p-2 bg-white rounded-full top-0 left-0">
                        <svg class="w-10 text-white bg-sky-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                        </svg>                    
                    </div>
                    <span class="font-bold uppercase text-start">Petunjuk</span>
                </button>
            </div>
        </aside>
        <section class="w-full h-screen lg:flex hidden flex-col justify-center items-center">
            <h1 class="md:text-2xl lg:text-5xl text-center font-bold text-sky-700 uppercase">Pendidikan Olahraga</h1>
            <img src="{{ url('assets/img.png') }}" class="w-4/5" alt="" srcset="">
        </section>
    </main>

    @include('javascriptPart.home')
@endsection