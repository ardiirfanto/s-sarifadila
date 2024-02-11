@extends('layouts.materi')

@section('content')
    <div class="grid grid-cols-12 gap-3">
        <div class="md:col-span-6 xl:col-span-3 col-span-12">
            <a href="pelajaran-3/dasar-tangkap-lempar-basket">
                <div class="bg-sky-900 h-full shadow-lg rounded-lg border p-4">
                    <svg class="w-20 text-white block mx-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd"/>
                    </svg>
                    <h1 class="text-xl text-center text-white font-bold mt-4 uppercase">Latihan Dasar Menangkap dan Melempar Bola Basket</h1>
                </div>
            </a>
        </div>
        <div class="md:col-span-6 xl:col-span-3 col-span-12">
            <a href="pelajaran-3/dasar-tangkap-lempar-kasti">
                <div class="bg-sky-900 h-full shadow-lg rounded-lg border p-4">
                    <svg class="w-20 text-white block mx-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd"/>
                    </svg>
                    <h1 class="text-xl text-center text-white font-bold mt-4 uppercase">Latihan Dasar Menangkap dan Melempar Bola Kasti</h1>
                </div>
            </a>
        </div>
    <div class="fixed md:bottom-16 bottom-3 md:right-14 right-3">
        <a href="#">
            <button class="block text-white bg-pink-700 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800" type="button">
                <svg class="w-12 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm9-3a1.5 1.5 0 0 1 2.5 1.1 1.4 1.4 0 0 1-1.5 1.5 1 1 0 0 0-1 1V14a1 1 0 1 0 2 0v-.5a3.4 3.4 0 0 0 2.5-3.3 3.5 3.5 0 0 0-7-.3 1 1 0 0 0 2 .1c0-.4.2-.7.5-1Zm1 7a1 1 0 1 0 0 2 1 1 0 1 0 0-2Z" clip-rule="evenodd"/>
                </svg>
                Quiz      
            </button>
        </a>
    </div>
@endsection