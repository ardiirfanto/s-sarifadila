@extends('layouts.materixx')

@section('content')
    <h1 class="text-xl text-orange-700 font-bold">B. asar Menangkap dan Melempar Bola Kasti</h1>
    <button data-modal-target="extralarge-modal" onclick="playVideo()" data-modal-toggle="extralarge-modal" class="mt-8 mb-3 mx-auto block w-full md:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
        Liht Video
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
        Gerakan manipulatif, yaitu melempar dan menangkap bola juga terdapat pada permainan kasti. Terdapat perbedaan
        teknik dalam melempar dan menangkap bola kasti dibandingkan dengan bola basket. Perbedaan tersebut ditentukan juha
        oleh ukuran bola yang lebih kecil.
    </p>
    <p class="text-justify">
        Permainan kasti merupakan olahraga permainan beregu, setiap regunya terdiri dari 12 orang. Permainan ini dimainkan
        di lapangan berbentuk empat persegi panjang yang dibatasi oleh garis batas dari beton atau menggunakan tali tambang.
    </p>
    <img src="{{ url('assets/kasti_1.jpg') }}" class="block mx-auto mt-3" alt="">
    <p class="text-center">Gambar 5.1</p>

    <h1 class="text-lg text-sky-700 font-bold">1. Gerakan Dasar Melempar Bola Kasti</h1>
    <ul style="list-style: lower-alpha" class="ms-8 text-justify">
        <li class="font-semibold">Melempar Bola Rendah</li>
            <p>
                Bola dipegang dengan tangan kanan atau kiri. Ayunkan tangan yang memegang bola, dari belakang ke depan sambil
                melepaskan bola. Posisi badang tegak, pandangan lurus ke depan. Posisi kaki disesuaikan dengan tangan yang memegang
                bola tadi. Jika tangan kanan yang melempar, posisi kaki kiri berada di depan agar bola dapat diarahkan dengan sempurna.
            </p>
        <li class="font-semibold">Melempar Bola Datar</li>
            <p>
                Tangan yang memegang bola berada di samping pinggang. Posisi telapak tangan yang memegang bola menghadap ke depan,
                kemudian lemparkan lurus ke arah yang dituju dengan posisi kaki terbuka dan badan agak miring.
            </p>
        <li class="font-semibold">Melempar Bola Lambung atau Tinggi</li>
            <p>
                Poisis yang memegang bola berada di samping kepala dan ditekuk ke arah depan. Ayunkan tangan yang memegang bola
                dari arah belakang kepala. Lemparkan bola dari tangan lurus ke depan. Posisi kaki disesuaikan dengan tangan yang melempar
                agar lemparan sempurna.
            </p>
            <p>
                Ketiga gerak dasar melempar bola digunakan oleh seorang pelempar atau pitcher dalam permainan kasti. Agar dapar melempar
                dengan baik, seorang pelempar menggunakan teknik lemparan dengan gerakan tertentu pula.
            </p>
            <p>
                Cobalah kamu amati gambar peragaan gerak melempar bola berikut! Selanjutnya, praktikan bersama teman-temanmu. Lakukan
                gerakan melempar bola dengan menggunakan teknik putaran tangan. Cara berlatihnya adalah sebagai berikut.
            </p>
            <ul class="list-decimal ms-8">
                <li class="text-justify">
                    Kedua tangan lurus kedepan.
                </li>
                <li class="text-justify">
                    Kaki kiri di depan, kaki kanan di belakang.
                </li>
                <li class="text-justify">
                    Badan sedikit menyerong.
                </li>
                <li class="text-justify">
                    Pandangan ke arah sasaran.
                </li>
                <li class="text-justify">
                    Tangan kanan diputar dari depan ke atas, ke belakang, ke bawah, dan kembali ke depan.
                </li>
                <li class="text-justify">
                    Saat tangan kembali ke depan, bola dilemparkan.
                </li>
                <li class="text-justify">
                    Kaki kanan bergerak untuk menjaga keseimbangan badan.
                </li>
            </ul>
            <img src="{{ url('assets/kasti_2.jpg') }}" class="block mx-auto mt-3" alt="">
            <p class="text-center">Gambar 5.2</p>
    </ul>

    <h1 class="text-lg text-sky-700 font-bold">2. Gerak Dasar Menangkap Bola Kasti</h1>
    <p class="text-justify">
        Cara menangkap bola dari berbagai arah dalam permainan kasti perlu dikuasai diantaranya menangkap bola rendah
        dari arah depan, menangkap bola datar dari arah depan, dan menangkap bola lambung dari arah depan.
    </p>
    <img src="{{ url('assets/kasti_3.jpg') }}" class="block mx-auto mt-3" alt="">
    <p class="text-center">Gambar 5.3</p>

    <ul style="list-style: lower-alpha" class="ms-8 text-justify">
        <li class="font-semibold">Menangkap Bola Rendah dari Arah Depan</li>
            <p class="text-justify">
                Posisi badan agak membungkuk. Kedua kaki terbuka sejajar dan kedua tangan menggantung di depan kaki. Pandangan
                lurus ke depan. Usahakan tangkap menggunakan kedua tangan.
            </p>

        <li class="font-semibold">Menangkap Bola Datar dari Arah Depan</li>
            <p class="text-justify">
                Posisi badan tegak dengan kedua kaki agak terbuka. Kedua tangan dilipat, dengan posisi telapak di depan dada.
                Pandangan ke depan. Tangkap bola menggunakan kedua tangan.
            </p>

        <li class="font-semibold">Menangkap Bola Lambung dari Arah Depan</li>
            <p class="text-justify">
                Posisi badan tegak dengan kedua kaki terbuka. Pandangan lurus ke depan tepat ke arah bola. Posisi
                kedua angan saat menangkap bola berada di depan muka agak ke atas.
            </p>
            <img src="{{ url('assets/kasti_4.jpg') }}" class="block mx-auto mt-3" alt="">
            <p class="text-center">Gambar 5.3</p>
            <p class="text-justify">
                Menangkap bola dapat dilakukan dengan satu atau dua tangan. Perhatikan arah bola datang saat menangkap bola.
                Saat bola masuk ke dalam genggaman telapak tangan, tangan sedikit dimundurkan dan ditutup agar bola tidak memantul kembali.
            </p>
            <ul class="list-decimal ms-8">
                <li>Bola datang horisontal (setinggi dada)</li>
                    <ul class="list-disc ms-8">
                        <li>
                            Sikap berdiri kangkang
                        </li>
                        <li>
                            Kedua tangan lurus ke depan setinggi bahu.
                        </li>
                        <li>
                            Telapak tangan dibuka saling berdekatan (menempel).
                        </li>
                    </ul>
                <li>Menangkap bola secara vertikal</li>
                    <ul class="list-disc ms-8">
                        <li>
                            Berdiri dengan kaki melangkah.
                        </li>
                        <li>
                            Kedua tangan lurus ke atas.
                        </li>
                    </ul>
                <li>Menangkap bola melambung</li>
                    <ul class="list-disc ms-8">
                        <li>
                            Berdiri rapat atau melangkah.
                        </li>
                        <li>
                            Kedua tangan menghadap ke depan atas.
                        </li>
                    </ul>
            </ul>
    </ul>
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