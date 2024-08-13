@extends('layouts.materixx')

@section('content')
    <h1 class="text-xl text-orange-700 font-bold">C. Tes dan Pengukuran Kebugaran Jasmani</h1>
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
    <p class="text-justify">
    Tes kebugaran jasmani adalah suatu kegiatan untuk mengukur
kekuatan dan tingkat kebugaran seseorang. Dalam pengajaran
pendidikan jasmani, olahraga, dan
dan kesehatan, tes dan pengukuran
kemampuan jasmani memiliki fungsi sebagai berikut.
    </p>
    <ul class="ms-8 list-decimal">
                <li>
                Mengukur kemampuan fisik peserta didik
                </li>
                <li>
                Menentukan status kondisi fisik peserta didik.
                </li>
                <li>
                Menilai kemampuan fisik peserta didik, yang merupakan salah
satu tujuan pengajaran Pendidikan Jasmani, Olahraga, dan
Kesehatan.
                </li>
                <li>
                Sebagai bahan untuk memberikan bimbingan dalam meningkatkan
kebugaran jasmani peserta didik.
                </li>
                <li>
                6. ebagai salah satu bahan masukan dalam memberikan nilai
pelajaran Pendidikan Jasmani, Olahraga, dan Kesehatan.
                </li>
            </ul>

    <h1 class="text-lg text-red-700 font-bold">1. Tes Lari Cepat 60 meter</h1>
    <ul class="ms-8 list-decimal">
                <li>
                Tujuan: mengukur kecepatan lari peserta didik.
                </li>
                <li>
                Alat atau fasilitas vang dibutuhkan.Lintasan lurus, rata, dan tidak licin. Peluit,Stopwatch, Bendera start dan tiang pancang.
                </li>
                <li>
                Pelaksanaan peserta didik berdiri di belakang garis start dengan sikap
berdiri. Pada waktu I diberi aba-aba 'ya, peserta didik lari secepat-
cepatnya untuk menempuh jarak 60 meter. Ketika peserta didik menyentuh atau melewati garis finis,
stopwatch dihentikan. Skor hasil tes adalah waktu dalam per sepuluh detik yang
dapat dicapai oleh peserta didik untuk menempuh jarak 60
meter.
                </li>
            </ul>

            <h1 class="text-lg text-red-700 font-bold">2. Tes Angkat Tubuh</h1>
    <ul class="ms-8 list-decimal">
                <li>
                Tujuan: mengukur kekuatan dan daya tahan otot lengan dan
otot bahu.
                </li>
                <li>
                Alat atau fasilitas vang dibutuhkan.Lantai yang rata dan bersih. Palang tunggal yang tinggi rendahnya dapat diatur sehingo:
peserta didik dapat bergantung, Stopwatch, Formulir pencatatan hasil tes dan alat tulis.
                </li>
                <li>
                Pelaksanaan Peserta didik bergantung pada palang tunggal sehingga
kepala, badan, dan tungkai lurus. Kedua lengan dibuka
selebar bahu dan harus lurus. Peserta didik mengangkat tubuhnya dengan membengkokkan
kedua lengan sehingga dagu menyentuh atau melewati
palang tunggal. Setelah itu, kembali ke sikap semula. Lakukan gerakan tersebut berulang-ulang tanpa istirahat
selama 30 detik untuk putri dan 60 detik untuk putra.
                </li>
            </ul>

            <h1 class="text-lg text-red-700 font-bold">3. Tes Baring Duduk</h1>
    <ul class="ms-8 list-decimal">
                <li>
                Tujuan: mengukur kekuatan dan daya tahan otot perut.
                </li>
                <li>
                Alat atau fasilitas vang dibutuhkan. Lantai atau lapangan rumput yang bersih, Stopwatch, Formulir pencatatan hasil tes dan alat tulis.
Pelaksanaan.
                </li>
                <li>
                Peserta didik berbaring telentang di atas lantai atau rumput
dengan kedua lutut ditekuk. Kedua tangan dilipat dan
diletakkan di belakang kepala dengan jari tangan saling
berkaitan. Seorang teman membantu memegang dan
menekan kedua pergelangan kaki agar kaki tidak terangkat. Pada aba-aba (ya), peserta didik bergerak mengambil sikap
duduk sehingga kedua sikunya menyentuh paha, kemudian
kembali ke sikap semula. Lakukan gerakan tersebut berulang-ulang tanpa istirahat
selama 60 detik.
A Nilai vang diperoleh adalah jumlah baring duduk yang dapat
dilakukan dengan benar selama 60 detik
                </li>
            </ul>

            <h1 class="text-lg text-red-700 font-bold">4. Tes Loncat Tegak</h1>
    <ul class="ms-8 list-decimal">
                <li>
                Tujuan: mengukur daya ledak otot tungkai.
                </li>
                <li>
                Alat atau fasilitas vang dibutuhkan.Dinding dan n lantai yang rata dan luas.
Papan berwarna gelap berukuran 30 150 cm dan berskala
satuan cm yang digantung pada dinding, dengan ketinggian
jarak antara lantai dan angka O pada papan berskala ukuran
150 cm.
                </li>
                <li>
                Pelaksanaan Peserta didik  Peserta didik berdiri tegak dekat dinding, bertumpu pada
kedua kaki, dan papan dinding berada di samping tangan
kanan atau kiri. Tangan yang berada dekat dinding diangkat lurus ke atas,
telapak tangan ditempelkan pada papan berskala sehingga
meninggalkan bekas raihan jarinya. Setelah itu, peserta didik mengambil sikap awalan dengan
membengkokkan kedua lutut. Peserta didik meloncat setinggi mungkin sarnbil menepuk
papan berskala dengan tangan yang terdekat dengan dinding
sehingga meninggalkan bekas raihan pada papan.
                </li>
            </ul>

            <h1 class="text-lg text-red-700 font-bold">5. Tes Lari Jarak Jauh</h1>
    <ul class="ms-8 list-decimal">
                <li>
                Tujuan: mengukur daya tahan kardiorespiratori (jantung dan
paru-paru) dengan n lari 1.000 m untuk putri dan 1.200 m untuk
putra.
                </li>
                <li>
                Alat atau fasilitas vang dibutuhkan Lapangan yang rata atau lintasan lari Bendera start dan tiang pancang, Tanda atau garis untuk start t dan finis, Peluit, Stopwatch, Formulir pencatatan hasil tes dan alat tulis
                </li>
                <li>
                Peserta didik berdiri tegak dekat dinding, bertumpu pada
kedua kaki, dan papan dinding berada di samping tangan
kanan atau kiri.  Tangan yang berada dekat dinding diangkat lurus ke atas,
telapak tangan ditempelkan pada papan berskala sehingga
meninggalkan bekas raihan jarinya. Setelah itu, peserta didik mengambil sikap awalan dengan
membengkokkan kedua lutut. Peserta didik meloncat setinggi mungkin sarnbil menepuk
papan berskala dengan tangan yang terdekat dengan dinding
sehingga meninggalkan bekas raihan pada papan. Tanda ini menandakan tinggi raihan loncatan peserta didik. Peserta didik diberi kesempatan melakukan gerakan tersebut
sebanyak tiga kali loncatan.
                </li>
            </ul>

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
    
        <a href="{{ route('pelajaran5') }}" button type="button"  class="inline-flex flex-col items-center justify-center px-5 border-gray-200 border-x hover:bg-gray-50 dark:hover:bg-gray-800 group dark:border-gray-600">
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