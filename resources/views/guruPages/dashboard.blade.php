@extends('layouts.guru')

@section('content')
    @if (session('status'))
        <div id="toast-top-right" class="fixed flex items-center z-50 w-full max-w-xs top-5 right-5" role="alert">
            <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
                <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="sr-only">Check icon</span>
                </div>
                <div class="ms-3 text-sm font-normal">{{ session('status') }}</div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
        </div>
    @endif
    <div class="grid grid-cols-12 gap-3">
        <div class="lg:col-span-7 col-span-12 mb-12">
            <div class="grid xl:grid-cols-2 grid-cols-1 gap-3">
                @foreach ($data as $item)
                    <div class="shadow-lg p-3">
                        <video src="{{ url('storage/materi-video/'. $item->video) }}" controls class="aspect-video bg-black"></video>
                        <h1 class="text-lg text-center font-semibold mb-3">{{ $item->pelajaran }}</h1>
                        <h2 class="text-center text-sm">{{ $item->nama_materi }}</h2>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="lg:col-span-5 col-span-12">
            <div class="border py-8 px-10 shadow-md">
                <livewire:upload-video-form />
            </div>
        </div>
    </div>
@endsection