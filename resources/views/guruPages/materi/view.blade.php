@extends('layouts.default')

@section('content')
    @if (session('status'))
        <div id="toast-top-right" class="fixed flex items-center z-50 w-full max-w-xs top-5 right-5" role="alert">
            <div id="toast-success"
                class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
                role="alert">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="sr-only">Check icon</span>
                </div>
                <div class="ms-3 text-sm font-normal">{{ session('status') }}</div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                    data-dismiss-target="#toast-success" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        </div>
    @endif
    <div class="container">
        <div class="element-heading mt-20">
            <div class="grid lg:grid-cols-1 gap-3 ">
                <div class="text-lg font-semibold text-blue-700 text-center">
                    Menu Materi
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card bg-dark direction-rtl">
                <div class="card-body">
                    <div class="mb-2">
                        <a href="{{ route('tambahmateri',['idmapel' => $mapel->id]) }}"
                            class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            Tambah Materi
                        </a>
                    </div>
                    <br>
                    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="3000"
                        data-bs-autohide="false">
                        <div class="toast-header">
                            <div class="grid lg:grid-cols-3 gap-3 ">

                                @foreach ($materi as $item)
                                    <div class="border rounded-lg py-5 xl:px-5 px-3 mb-4">
                                        <div class="flex flex-row gap-2 mb-2">
                                            <div class="product-thumbnail d-block">
                                                <img class="w-20 h-20 rounded-lg"
                                                    src="{{ asset('assets/img/materi/' . $item->gambar) }}" alt="">
                                            </div>
                                            <div class="flex flex-col justify-between">
                                                <div class="text-lg font-semibold">
                                                    BAB {{ $item->bab . ' - ' . $item->judul }}
                                                </div>
                                                <div>
                                                    <button
                                                        onclick="setDelRoute('{{ route('materi.delete', ['id' => $item->id]) }}')"
                                                        data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                                        class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                                        Hapus
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="mt-2">
                                            <a href="{{ route('kelolasubmateri', ['materiid' => $item->id]) }}"
                                                class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                                Lihat Sub Materi
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="toast-body">Silahkan isi menu materi.</div>
                    </div>
                </div>
            </div>
        </div>


        <br>

    </div>

    {{-- Delete Modal --}}
    <div id="popup-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Menghapus Materi akan
                        menghapus
                        data lainnya yang berelasi. Lanjutkan?
                    </h3>
                    <a href="" id="delbutton" data-modal-hide="popup-modal" type="button"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                        Ya, Hapus Data
                    </a>
                    <button data-modal-hide="popup-modal" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Tidak,
                        Batal
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function setDelRoute(route) {
            var btn = document.getElementById('delbutton')
            btn.setAttribute('href', route);
        }
    </script>
@endsection
