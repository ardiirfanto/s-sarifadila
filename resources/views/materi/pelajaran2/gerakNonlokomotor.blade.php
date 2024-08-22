@extends('layouts.materixx')

@section('content')
    <h1 class="text-xl text-orange-700 font-bold">A. Bola Voli</h1>
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
    <h1 class="text-lg text-red-700 font-bold">1. Hakikat Permainan Bola Voli</h1>
    <p class="text-justify">

    Permainan bola voli adalah suatu permainan cepat. Artinya,
waktu dalam satu pertandingan sangat terbatas, yaitu hanya
sampai 25 poin. Permainan bola voli dimulai dengan pukulan servis
yang merupakan pukulan awal dalam membangun serangan pada
pertahanan lawan.Seiring berkembangnya zaman, permainan
bola voli menjadi salah satu cabang olahraga prestasi di Indonesia.
Permainan ini pun masih dipertandingkan dalam PON hingga saat
ini sejak dimulainya pada PON kedua di Jakarta tahun 1951.
Pada 22 Januari 1955, diresmikan berdirinya Persatuan Bola
Voli Seluruh Indonesia (PBVSI) di Jakarta. Pada Maret 1955, KONI
mengesahkan PBVSİ sebagai induk organisasi bola voli yang tertinggi
di Indonesia.
    </p>

    <h1 class="text-lg text-red-700 font-bold mt-5">2. Peraturan Bola Voli</h1>
    <b style="color: black;">A. Ketentuan Permainan</b>
    <p class="text-justify">
    Adapun peraturan dalam permainan bola voli adalah sebagai berikut.
    <ul class="ms-8 list-decimal">
                <li>
                Permainan dimulai dengan pukulan servis oleh pemain
belakang kanan (posisi 1) di dalam daerah servis.
                </li>
                <li>
                Setiap tim berhak memainkan bola paling banyak tiga kali
sentuhan (kecuali block) untuk mencegah bola menyentuh
lapangan sendiri.
                </li>
                <li>
                Bola tetap dalam permainan sampai bola menyentuh lantai
atau seorang pemain melakukan kesalahan.
                </li>
                <li>
                Tim yang memenangkan set permainan adalah yang berhasil
mendapatkan 25 poin atau selisih dua angka setelah deuce
(seri) dengan tim lawan.
                </li>
                
            </ul>
    </p>

    <b style="color: black;">B. Lapangan Bola Voli</b>
    <p>Daerah permainan bola voli dibagi
menjadi dua, yaitu
lapangan permainan dan daerah bebas. Lapangan permainan
berbentuk persegi panjang dengan ukuran 18 x 9 m. Lapangan
permainan iní dikelilingi oleh daerah bebas berukuran minimal
3 m di semua sisi. Dalam kejuaraan dunia dan pertandingan
resmi Federasi Bola Voli Internasional (FIVB), daerah bebas harus
berukuran 5 m dari garis samping dan 8 m dari garis akhir.</p>
    <ul class="list-decimal ms-8 text-justify"> 
        <img src="{{ url('assets/lapanganvoli.JPG') }}" class="block mx-auto mt-5" alt="">
    <p class="text-center">Gambar 1.2</p>
    </ul>
    <b style="color: black;">C. Tinggi Net</b>
    <p class="text-justify">
    
    Net pada permainan bola voli dipasang tegak lurus di atas
garis tengah, dengan ketinggian 2,43 m untuk putra dan 2,24 m
untuk putri.
<img src="{{ url('assets/netvoli.png') }}" class="block mx-auto mt-5" alt="">
    <p class="text-center">Gambar 1.2</p>
    </p>


    <b style="color: black;">D. Bola</b>
    <p class="text-justify"> 
    Bola yang digunakan dalam permainan
bola voli harus bulat dan telah terisi
angin. Bola dapat terbuat dari kulit
yang lunak, lentur, atau bahan sejenis
agar tangan tidak terasa sakit saat
memukul bola. Keliling bola sekitar 165-
167 cmn dan beratnya 200-289 gram.
Adapun tekanan udara di dalam bola harus
0,300-0,325 kg/cm² atau 294.3-318,82 m
bar.
<img src="{{ url('assets/bolavoli.JPeG') }}" class="block mx-auto mt-5" alt="">
    <p class="text-center">Gambar 1.4</p>
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