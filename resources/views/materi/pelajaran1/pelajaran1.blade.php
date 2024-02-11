@extends('layouts.materi')

@section('content')
    <livewire:login-quiz-form />
    <div class="grid grid-cols-12 gap-3">
        <div class="md:col-span-6 xl:col-span-3 col-span-12">
            <a href="pelajaran-1/jalan-cepat">
                <div class="bg-sky-900 h-full shadow-lg rounded-lg border p-4">
                    <svg class="w-20 text-white block mx-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd"/>
                    </svg>
                    <h1 class="text-xl text-center text-white font-bold mt-4 uppercase">Jalan Cepat</h1>
                </div>
            </a>
        </div>
        <div class="md:col-span-6 xl:col-span-3 col-span-12">
            <a href="pelajaran-1/lari-jarak-pendek">
                <div class="bg-sky-900 h-full shadow-lg rounded-lg border p-4">
                    <svg class="w-20 text-white block mx-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd"/>
                    </svg>
                    <h1 class="text-xl text-center text-white font-bold mt-4 uppercase">Lari Jarak Pendek</h1>
                </div>
            </a>
        </div>
        <div class="md:col-span-6 xl:col-span-3 col-span-12">
            <a href="pelajaran-1/lompat-jauh">
                <div class="bg-sky-900 h-full shadow-lg rounded-lg border p-4">
                    <svg class="w-20 text-white block mx-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd"/>
                    </svg>
                    <h1 class="text-xl text-center text-white font-bold mt-4 uppercase">Lompat Jauh</h1>
                </div>
            </a>
        </div>
    </div>
@endsection