@extends('layouts.materixx')

@section('content')
<div class="container">
      <div class="element-heading mt-20">
        <h6>PENGELASAN FCAW</h6>
      </div>
    </div>

    <div class="container">
      <div class="card">
        <div class="card-body">
        {{-- Panel Video --}}
    <button data-modal-target="extralarge-modal" onclick="playVideo()" data-modal-toggle="extralarge-modal"
        class="w-full h-12 px-6 text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
        type="button">
        
        Putar Video
    </button>
    <!-- Extra Large Modal -->
    <div id="extralarge-modal" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-7xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-center justify-between p-2 md:p-5 border-b rounded-t dark:border-gray-600">
                    <button type="button" onclick="stopVideo()"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="extralarge-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-2 md:p-5">
                    @if ($video->count() < 1)
                        <h1 class="text-center text-black sm:text-2xl text-lg font-semibold">Video Tidak Tersedia</h1>
                    @endif
                    @foreach ($video as $item)
                        <video src="{{ url('/storage/materi-video/' . $item->video) }}" id="video" controls
                            class="w-full mx-auto"></video>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- End::Panel Video --}}

    {{-- Content --}}
    <div class="content">
        {!! $row->content !!}

    </div>
    {{-- End::Content --}}


    {{-- Play Video --}}
    <script>
        function playVideo() {
            document.getElementById('video').play()
        }

        function stopVideo() {
            document.getElementById('video').pause();
        }
    </script>
    
        </div>
      </div>
    </div>
 
@endsection


