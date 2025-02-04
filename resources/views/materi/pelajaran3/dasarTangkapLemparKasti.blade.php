@extends('layouts.materixx')

@section('content')
    <h1 class="text-xl text-orange-700 font-bold">B. Lari Jarak Pendek</h1>
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
    <h1 class="text-lg text-red-700 font-bold">1. Hakikat Lari Jarak Pendek</h1>
    <p class="text-justify">

    Lari merupakan salah satu cabang olahraga tertua di dunia
Sebelum menjadi cabang olahraga, lari sudah dikenal seiak
peradaban kuno. Terdapat versi yang menyebutkan bahwa lari
berawal dari bangsa Yunani. Pada saat itu, terjadi peperangan antara
kaum Yunani dan Persia di Kota Marathonas, Pulau Egina, Yunani.
Dalam peperangan tersebut, pasukan Yunani berhasil menang atas
pasukan Persia. Pasukan Yunani pun memerintahkan salah seorang
pasukannya untuk menyampaikan berita kemenangan tersebut.
Pembawa berita tersebut pun berlari ke Athena sepanjang 40,8 km
dalam sehari. Setibanya di kota, ia pingsan, kemudian meninggal
dunia. Untuk mengenang kemenangan perang dan menghormati
pembawa berita tersebut, dalam beberapa periode diselenggarakan
Lomba lari.
    </p>

    <h1 class="text-lg text-red-700 font-bold mt-5">2. Keterampilan Gerak lari jarak Pendek</h1>
    <b style="color: black;">A. Star Lari Jarak Pendek</b>
    <p class="text-justify">
    
    Start adalah suatu persiapan awal seorang pelari saat akan
melakukan gerakan berlari. Start yang digunakan untuk lari jarak
pendek adalah start jongkok, sedangkan untuk lari jarak menengah
dan jarak jauh menggunakan start berdiri. Tujuan utama start
dalam lari jarak pendek, lari estafet, dan lari gawang adalah untuk
mengoptimalkan kecepatan lari.
Hal-hal yang perlu dilakukan pada saat start jongkok adalah
pelari harus berkonsentrasi penuh pada saat terdengar aba-
aba "Bersedia", menyesuaikan sikap pada aba-aba "Siap", dan
mendorongkan kedua kaki secara eksplosif pada start block setelah
aba-aba "Ya"
<img src="{{ url('assets/starlari.JPG') }}" class="block mx-auto mt-5" alt="">
    <p class="text-center">Gambar 1.2</p>
    </p>

    <b style="color: black;">B. Lari Sprint Lari Jarak Pendek</b>
    <p>Tuiuan keterampilan gerak pada lari jarak pendek adalah
memaksimalkan kecepatan horizontal yang dihasilkan dari dorongan
badan ke depan. Kecepatan lari ditentukan oleh panjang langkah
dan frekuensi langkah. Jadi, pelari jarak pendek harus dapat
meningkatkan kedua-duanya. Setelah pelari melakukan gerakan
start, dilanjutkan dengan melakukan lari sprint</p>
  
      
    </ul>
    <b style="color: black;">C. Memasuki Garis Finis</b>
    <p class="text-justify">
    
    Terdapat tiga macam cara yang dapat digunakan untuk memasuki
garis finis. Ketiga cara tersebut adalah sebagai berikut.
<ul class="ms-8 list-decimal">
                <li>
                Berlari dengan kecepatan tinggi tanpa mengubah posisi lari
hingga mencapai garis finis.
                </li>
                <li>
                Saat akan menyentuh pita atau melewati garis finis, dada
dicondongkan ke depan.
                </li>
                <li>
                Saat akan menyentuh pita atau melewati garis finis, majukan salah
satu bahu ke arah depan.
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
    
        <a href="{{ route('pelajaran3') }}" button type="button"  class="inline-flex flex-col items-center justify-center px-5 border-gray-200 border-x hover:bg-gray-50 dark:hover:bg-gray-800 group dark:border-gray-600">
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