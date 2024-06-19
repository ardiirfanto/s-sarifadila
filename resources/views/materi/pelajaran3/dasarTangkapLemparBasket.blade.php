@extends('layouts.materixx')

@section('content')
    <h1 class="text-xl text-orange-700 font-bold">A. Latihan Dasar Menangkap dan Melempar Bola Basket</h1>
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
        Melempar dan menangkap bola merupakan keterampilan dasar yang harus dimiliki untuk bermain permainan bola basket. Oleh
        karena itu, pemahaman dan latihan yang cukup akan memudahkanmu untuk mempelajari permainan bola basket.
    </p>
    <p class="text-justify">
        Pada pembelajaran kali ini, kamu akan berlatih gerakan manipulatif yaitu melempar dan menangkap bola. Sebelum mempelajari
        keterampilan dasar bola basket, coba kamu praktikan cara memegang bola basket, seperti ditunjukkan pada gambar 4.1
    </p>
    <img src="{{ url('assets/basket_1.jpg') }}" class="block mx-auto w-80 mt-5" alt="">
    <p class="text-center">Gambar 4.1</p>
    
    <h1 class="text-lg text-sky-700 font-bold">1. Gerakan Dasar Melempar Bola Setinggi Dada</h1>
    <p class="text-justify">
        Coba amati peragaan melempar dan menangkap bola Gambar 4.2! Kegiatan melempar dan menangkap bola tersebut dilakukan
        untuk jarak pendek. Cara melempar bola dilakukan dengan disertai dorongan. Lakukan lemparan dan tangkapan bola secara
        mandiri dengan bantuan dinding. Lakukan lemparan pada dinding tembok untuk melatih gerakan reflek menangkap bola. Perhatikan
        tingkat keberhasilanmu dalam melempar dan menangkap bola. Lakukan berulang-ulang hingga mahir.
    </p>
    <p class="text-justify">
        Kemudian lakukan lemparan dan tangkapan secara berpasangan. Perhatikan arah lemparan kepada pasanganmu. Jangan melempar
        diluar jangkauan tangkapannya. Perhatikan pula arah bola saat menangkap. Konsentrasi menjadi kunci utama keberhasilan
        dalam menangkap bola dengan pasanganmu.
    </p>
    <img src="{{ url('assets/basket_2.jpg') }}" class="block mx-auto w-64 mt-4" alt="">
    <p class="text-center">Gambar 4.2</p>

    <h1 class="text-lg text-sky-700 font-bold mt-3">2. Gerak Dasar Menangkap dan Melempar Bola di Atas Kepala</h1>
    <p class="text-justify">
        Lemparan ini sangat berguna bagi pemain-pemain bertubuh tinggi. Bola dilempar dengan pergelangan tangan dan didorong
        ujung jari tangan. Seperti pada latihan sebelumnya, lakukan lemparan pada dinding tembok untuk melatih refleks menangkap
        bola. Ketetapan tangkapan juga dipengaruhi oleh sudut yang terbentuk saat melempar bola. Setelah cukup mahir berlatih
        secara mandiri, lakukan latihan menangkap dan melempar bola secara berpasangan.
    </p>
    <div class="flex justify-around flex-wrap">
        <img src="{{ url('assets/basket_3.jpg') }}" class="block mx-auto w-64 mt-4" alt="">
        <img src="{{ url('assets/basket_4.jpg') }}" class="block mx-auto w-64 mt-4" alt="">
    </div>
    <p class="text-center">Gambar 4.3</p>

    <h1 class="text-lg text-sky-700 font-bold mt-3">3. Gerak Dasar Melempar dan Menangkap Bola Melalui Pantulan</h1>
    <p class="text-justify">
        Dalam permainan bola basket, dikenal pula teknik melempar bola secara memantul. Teknik ini berguna untuk menerobos
        pertahanan lawan. Saat berhadapan dengan pemain lawan yang berpostur tinggi, kita dapat mengoper bola kepada teman
        dengan mengecohnya dengan teknik pantulan.
    </p>
    <p class="text-justify">
        Lemparan ini juga dilakukan untuk operan jarak dekat terutama bila lawan melakukan penjagaan satu lawan satu. Lakukan
        lemparan pada dinding tembok. Kemudian lakukan pula secara berpasangan.
    </p>
    <div class="flex justify-around items-center flex-wrap">
        <div>
            <img src="{{ url('assets/basket_5.jpg') }}" class="block mx-auto w-72 mt-4" alt="">
            <p class="text-center">Gambar 4.4</p>
        </div>
        <div>
            <img src="{{ url('assets/basket_6.jpg') }}" class="block mx-auto w-72 mt-4" alt="">
            <p class="text-center">Gambar 4.5</p>
        </div>
    </div>
    <script>
        function playVideo(){
            document.getElementById('video').play()
        }

        function stopVideo(){
            document.getElementById('video').pause();
        }
    </script>

<footer>
<div class="fixed bottom-0 left-0 z-50 w-full h-16 bg-white border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600">
    <div class="grid h-full max-w-lg grid-cols-4 mx-auto font-medium">
    
        <a href="{{ route('pelajaran3') }}" button type="button"  class="inline-flex flex-col items-center justify-center px-5 border-gray-200 border-x hover:bg-gray-50 dark:hover:bg-gray-800 group dark:border-gray-600">
            <svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
            </svg>
            <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Home</span>
        </button>
        <a href="https://shopee.co.id/product/796875347/22545852389?gad_source=4&gclid=CjwKCAiA29auBhBxEiwAnKcSquO1WhCYcsOEwsnek41kmwZlMQb5Fliek-q2VIR4PfEBY4BKjOn3HxoCjLMQAvD_BwE" button type="button" class="inline-flex flex-col items-center justify-center px-5 border-e border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 group dark:border-gray-600">
            <svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"/>
                <path d="M19 10h-6a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1Zm-4.5 3.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM12.62 4h2.78L12.539.41a1.086 1.086 0 1 0-1.7 1.352L12.62 4Z"/>
            </svg>
            <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Shop</span>
        </button>
        <a href="/logout"button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25"/>
            </svg>
            <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Logout</span>
        </button>
        <a href="https://www.facebook.com/arip.seisar"button type="button" class="inline-flex flex-col items-center justify-center px-5 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 group border-x dark:border-gray-600">
            <svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
            </svg>
            <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Profile</span>
        </button>
    </div>
</div>
</footer>
@endsection