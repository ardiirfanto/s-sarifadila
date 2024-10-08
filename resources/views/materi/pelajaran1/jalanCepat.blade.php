@extends('layouts.materixx')

@section('content')
    <h1 class="text-xl text-orange-700 font-bold">A. Sepakbola</h1>
    <button data-modal-target="extralarge-modal" onclick="playVideo()" data-modal-toggle="extralarge-modal"
        class="mt-8 mb-3 mx-auto block w-full md:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button">
        Lihat Video
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
                    @if ($data->count() < 1)
                        <h1 class="text-center text-black sm:text-2xl text-lg font-semibold">Video Tidak Tersedia</h1>
                    @endif
                    @foreach ($data as $item)
                        <video src="{{ url('/storage/materi-video/' . $item->video) }}" id="video" controls
                            class="w-full mx-auto"></video>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <h1 class="text-lg text-red-700 font-bold">1. Sejarah Sepak Bola</h1>
    <p class="text-justify">

        Sepak bola telah dikenal keberadaannya sejak abad kedua
        Sebelum Masehi oleh bangsa Tiongkok. Permainan ini dikenal dengan
        sebutan Tsu-Chiu, di mana pemainnya harus menggiring bola yang
        terbuat dari kulit ke dalam jaring kecil milik lawan.
        Permainan sepak bola semakin berkembang hingga ke Italia pada
        abad ke-16. Selama tahun 1800-an, permainan sepak bola terus berkembang
        ke seluruh dunia. Hingga pada akhirnya, terbentuklah asosiasi
        tertinggi sepak bola dunia, yaitu The Fédération Internationale de
        Football Association (FIFA), pada awal tahun 1900-an. Dengan
        adanya FIFA, kompetisi permainan sepak bola dapat dilakukan di
        berbagai negara.
    </p>

    <h1 class="text-lg text-red-700 font-bold mt-5">2. Peraturan Sepak Bola</h1>
    <b style="color: black;">A. Lapangan Permainan</b>
    <p class="text-justify">

        Lapangan sepak bola sesuai standar yang digunakan berbentuk
        empat persegi panjang, dengan garis samping (touch line) harus lebih
        panjang dari garis gawang (goal line). Panjang lapangan minimal
        90 m dan maksimal 120 m serta lebar lapangan minimal 45 m dan
        maksimal 90 m. Sementara itu, ukuran lapangan sepak bola dalam
        pertandingan internasional memiliki panjang minimal 100 m dan
        maksimal 110 m, dengan lebar minimal 64 m dan maksimal 75 m.
        Pada setiap ujung sisi lapangan, diberikan tanda tongkat bendera
        yang digunakan pemain pada saat melakukan tendangan penjuru
        atau sepak pojok.
        <img src="{{ url('assets/lapanganbola.JPG') }}" class="block mx-auto mt-5" alt="">
    <p class="text-center">Gambar 1.2</p>
    </p>
    <b style="color: black;">B. Jumlah Pemain</b>
    <p>Pemain sepak bola dalam setiap tim dibagi menjadi dua,
        dengan setiap tim terdiri atas 11 pemain, yang biasa disebut starting
        Sepak bola dimainkan oleh dua tim yang saling bertanding</p>
    <ul class="list-decimal ms-8 text-justify">



        <img src="{{ url('assets/jumlahpemain.JPG') }}" class="block mx-auto mt-5" alt="">
        <p class="text-center">Gambar 1.2</p>
    </ul>
    <b style="color: black;">C. Gawang</b>
    <p class="text-justify">

        Tinggi gawang permainan sepak bola adalah 2,44 m, diukur
        dari tanah sampai sisi bawah palang gawang. Sementara itu, lebar
        gawang adalah 7,32 m, diukur dari sisi dalam kedua tiang gawang.
        Tiang palang gawang dicat putih dan dibuat dari kayu atau logam
        dengan ketebalan maksimal 12 cm
        <img src="{{ url('assets/gawangbola.JPG') }}" class="block mx-auto mt-5" alt="">
    <p class="text-center">Gambar 1.2</p>
    </p>

    <b style="color: black;">D. Waktu Permainan</b>
    <p class="text-justify">

        Waktu pertandingan sepak bola adalah 2 x 45 menit yang terbagi
        dalam dua babak. Tiap babak diselingi dengan waktu istirahat selama
        1b menit. Jika dalam 2 x 45 menit belum ada tim yang memperoleh
        kemenangan, biasanya wasit yang memimpin pertandingan akan
        memberikan waktu tambahan atau yang biasa disebut injury time.
        Lamanya waktu tambahan ini adalah 2 x 15 menit. Jika waktu
        tambahan sudah habis dan pertandingan masih sama kuat atau
        belum ada kemenangan dari salah satu tim, pertandingan akan
        dilanjutkan dengan adu penalti untuk menentukan tim mana yang
        menang.
        <img src="{{ url('assets/waktubola.JPG') }}" class="block mx-auto mt-5" alt="">
    <p class="text-center">Gambar 1.3</p>
    </p>

    <b style="color: black;">E. Bola</b>
    <p class="text-justify">
        Ciri kualitas dan ukuran bola sepak yang baik untuk digunakan
        adalah sebagai berikut.

    <ul class="ms-8 list-decimal">
        <li>
            Berbentuk bundar/bulat.
        </li>
        <li>
            Terbuat dari kulit atau bahan lain yang sesuai.
        </li>
        <li>
            Diameter lingkaran tidak lebih dari 70 cm dan tidak kurang dari 68 cm.
        </li>
        <li>
            Berat tidak lebih dari 450 g dan tidak kurang dari 410 g.
        </li>
        <li>
            Tekanan udara dengan 0,6-1,1 atm (600-1100 g/cm).
        </li>
    </ul>
    <img src="{{ url('assets/bolakaki.JPG') }}" class="block mx-auto mt-5" alt="">
    <p class="text-center">Gambar 1.4</p>
    </p>

    <b style="color: black;">F. Perlengkapan Sepakbola</b>
    <p class="text-justify">
        Perlengkapan dasar/utama yang wajib dipakai oleh seorang
        pemain sepak bola adalah sebagai berikut.
    <ul class="ms-8 list-decimal">
        <li>
            Kaus olahraga.
        </li>
        <li>
            Celana pendek, jika memakai celana penghangat warnanya harus sama dengan warna celana pendek utama.
        </li>
        <li>
            Kaus kaki dan Pelindung tulang kering (shin guards).
        </li>
        <li>
            Sepatu bola.
        </li>
    </ul>

    <img src="{{ url('assets/perlengkapanbola.JPG') }}" class="block mx-auto mt-5" alt="">
    <p class="text-center">Gambar 1.5</p>
    </p>
    <script>
        function playVideo() {
            document.getElementById('video').play()
        }

        function stopVideo() {
            document.getElementById('video').pause();
        }
    </script>
    <script src="{{ asset('js/background-music.js') }}"></script> {{-- Efek Sound Background --}}
    <footer>
        <div
            class="fixed bottom-0 left-0 z-50 w-full h-16 bg-white border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600">
            <div class="grid h-full max-w-lg grid-cols-4 mx-auto font-medium">

                <a href="{{ route('pelajaran1') }}" button type="button"
                    class="inline-flex flex-col items-center justify-center px-5 border-gray-200 border-x hover:bg-gray-50 dark:hover:bg-gray-800 group dark:border-gray-600">
                    <svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg>
                    <span
                        class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Home</span>
                    </button>
                    <a href="https://e-library.erlanggaonline.co.id/info_product/detail/0056130030" button type="button"
                        class="inline-flex flex-col items-center justify-center px-5 border-e border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 group dark:border-gray-600">
                        <svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                            <path
                                d="M19 10h-6a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1Zm-4.5 3.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM12.62 4h2.78L12.539.41a1.086 1.086 0 1 0-1.7 1.352L12.62 4Z" />
                        </svg>
                        <span
                            class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Shop</span>
                        </button>
                        <a href="https://smkn5dumai.sch.id/"button type="button"
                            class="inline-flex flex-col items-center justify-center px-5 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 group border-x dark:border-gray-600">
                            <svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                            </svg>
                            <span
                                class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Profile</span>
                            </button>
                            <a href="/logout"button type="button"
                                class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                                <svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                </svg>
                                <span
                                    class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Logout</span>
                                </button>
            </div>
        </div>
    </footer>
@endsection
