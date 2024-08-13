@extends('layouts.materixx')

@section('content')
    <h1 class="text-xl text-orange-700 font-bold">B. Bulu Tangkis</h1>
    <button data-modal-target="extralarge-modal" onclick="playVideo()" data-modal-toggle="extralarge-modal" class="mt-8 mb-3 mx-auto block w-full md:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
        Lihat Video
    </button>
    <!-- Extra Large Modal -->
    <div id="extralarge-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-7xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-center justify-between p-2 md:p-5 border-b rounded-t dark:border-gray-600">
                    <button type="button" onclick="stopVideo()" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="extralarge-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
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
                        <video src="{{ url('/storage/materi-video/'. $item->video) }}" id="video" controls class="w-full mx-auto"></video>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    <h1 class="text-lg text-red-700 font-bold">1. Sejarah Bulu Tangkis</h1>
    <p class="text-justify">

    Asal mula permainan battledore menggunakan shuttlecock
yang di Indonesia lebih dikenal dengan nama kok. Dalam permainan
bottledore, dua orang berhadapan menepak kok selama mungkin.
Permainan seperti ini sudah dilakukan anak-anak dan orang dewasa
lebih dari 2.000 tahun lalu di India, Jepang, Thailand, Yunani, dan
Tiongkok. Lain halnya di Denmark, Jerman, Prancis, dan Swedia,
sebuah permainan lain yang hampir sama dengan badminton
dinamakan featherball. Permainan tersebut menggunakan bola dari
kulit ayam yang lunak.
Saat ini, battledore dikenal lebih umum dengan nama bulu
tangkis dan menjadi salah satu olahraga populer di dunia, terutama
di wilayah Asia Timur dan Tenggara.
    </p>

    <h1 class="text-lg text-red-700 font-bold mt-5">2. Peraturan Bulu Tangkis</h1>
    <b style="color: black;">A. Raket</b>
    <p class="text-justify">
    
    Pada tahun 1970-an, gagang raket dan daun raket
masih terbuat dari kayu. Namun, saat ini raket sudah
terbuat dari berbagai jenis bahan, seperti aluminium.
grafit, dan karbon.
Di tengah daun raket, terdapat jaring yang
dibuat dari senar (string) berupa tali plastik sintetis.
Senar yang baik adalah senar yang dapat dipasang
sekencang-kencangnya, tetapi tidak mudah putus
(dengan tarikan 21-24 ukuran kekencangan raket)
<img src="{{ url('assets/raketbadminton.JPG') }}" class="block mx-auto mt-5" alt="">
    <p class="text-center">Gambar 1.2</p>
    </p>

    <b style="color: black;">B. Kok</b>
    <p>Secara umum ada dua jenis kok, yaitu kok sintetis
dan kok bulu. Akan tetapi dalam perkembangannya,
kok bulu lebih dikenal dan digunakan oleh banyak
orang. Biasanya kok terbuat dari bulu angsa buatan
pabrik. Menurut IBF (International Badminton
Federation), berat kok sekitar 5,67 g</p>
  
        <img src="{{ url('assets/kok.JPG') }}" class="block mx-auto mt-5" alt="">
    <p class="text-center">Gambar 1.2</p>
    </ul>
    <b style="color: black;">C. Net</b>
    <p class="text-justify">
    
    Bulu tangkis tidak dapat dimainkan tanpa adanya net atau
jaring. Net dipasang di tengah-tengah lapangan badminton
dengan tinggi kurang lebih 155 cm. Net merupakan pembatas
lapangan permainan antara pemain dan lawannya. Tinggi net
sama untuk semua jenis permainan bulu tangkis, baik tunggal
maupun ganda, putra atau putri. Tiang yang digunakan untuk
mengikat net haruslah kokoh supaya net yang dibentangkan
tidak akan turun jika ditarik untuk dikencangkan. Tinggi net di
tengah-tengah harus 152 cm dari permukaan lapangan
<img src="{{ url('assets/netbadminton.JPG') }}" class="block mx-auto mt-5" alt="">
    <p class="text-center">Gambar 1.2</p>
    </p>

    <b style="color: black;">D. Lapangan</b>
    <p class="text-justify">
    
    Lapangan bulu tangkis membutuhkan ruang sekitar 12 x 20 m
yang dapat dibuat di ruang terbuka atau tertutup. Pemain
bulu tangkis yang bermain di lapangan terbuka dapat menjumpai kendala
<img src="{{ url('assets/lapanganbadminton.JPG') }}" class="block mx-auto mt-5" alt="">
    <p class="text-center">Gambar 1.3</p>
    </p>

    
    <script>
        function playVideo(){
            document.getElementById('video').play()
        }

        function stopVideo(){
            document.getElementById('video').pause();
        }
    </script>
<script src="{{ asset('js/background-music.js') }}"></script> {{-- Efek Sound Background --}}

<footer>
<div class="fixed bottom-0 left-0 z-50 w-full h-16 bg-white border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600">
    <div class="grid h-full max-w-lg grid-cols-4 mx-auto font-medium">
    
        <a href="{{ route('pelajaran2') }}" button type="button"  class="inline-flex flex-col items-center justify-center px-5 border-gray-200 border-x hover:bg-gray-50 dark:hover:bg-gray-800 group dark:border-gray-600">
            <svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
            </svg>
            <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Home</span>
        </button>
        <a href="https://e-library.erlanggaonline.co.id/info_product/detail/0056130030" button type="button" class="inline-flex flex-col items-center justify-center px-5 border-e border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 group dark:border-gray-600">
            <svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"/>
                <path d="M19 10h-6a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1Zm-4.5 3.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM12.62 4h2.78L12.539.41a1.086 1.086 0 1 0-1.7 1.352L12.62 4Z"/>
            </svg>
            <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Shop</span>
        </button>
        <a href="https://smkn5dumai.sch.id/"button type="button" class="inline-flex flex-col items-center justify-center px-5 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 group border-x dark:border-gray-600">
            <svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
            </svg>
            <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Profile</span>
        </button>
        <a href="/logout"button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25"/>
            </svg>
            <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Logout</span>
        </button>
    </div>
</div>
</footer>
@endsection