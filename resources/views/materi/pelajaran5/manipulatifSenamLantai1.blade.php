@extends('layouts.materixx')

@section('content')
    <h1 class="text-xl text-orange-700 font-bold">van1</h1>
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
        Setelah memahami arti senam lantai dan unsur-unsurnya yang perlu dilatih dalam senam lantai, sekarang
        kita pelajari gerakan-gerakan senam lantai berikut.
    </p>

    <h1 class="text-lg text-sky-700 font-bold">1. Gerak Dasar Handstand</h1>
    <img src="{{ url('assets/senam_lantai_9.jpg') }}" class="block mx-auto w-96 mt-4" alt="">
    <p class="text-center">Gambar 7.1</p>
    <p class="text-justify">
        Pembelajaran gerakan <i><b>Handtand</b></i> bagi pemula dapat menggunakan dinding tembok untuk menahan
        badan agar tidak jatuh. Awalnya berdiri sambil merentangkan tangan ke depan atau dapat pula diawali
        dari posisi jongkok. Kemudian badan dibungkukkan dan tangan digunakan sebagai tumpuan badan. Dorong
        kedua kaki hingga terangkat ke atas. Raoatkan kedua kaki ke tembok dan membentuk garis lurus antara badan
        dan kedua tangan serta kaki. Pertahankan keseimbangan handstand untuk beberapa saat.
    </p>

    <h1 class="text-lg text-sky-700 font-bold">2. Gerak Dasar Handstand atau Kopstand</h1>
    <p class="text-justify">
        Agar berani dan mampu melakukan latihan ini dengan aman, mintalah bantuan guru atau teman.
        Lakukan latihan tersebut dengan hati-hati dan agar tidak cedera.
    </p>
    
    <ul style="list-style: lower-alpha" class="ms-8 text-justify">
        <li class="font-semibold">Handstand dengan Kedua Kaki Ditekuk</li>
            <p>
                Latihan handstand harus dilakukan dengan disiplin dan hati-hati. Bagian area kepala diletakkan
                di lantai. Posisi leher jangan dilakukan melenting. Sikap kaki dan tangan pada posisi headstand
                dapat divariasikan. Pada headstand satu kaki ditekuk, kaki yang lain diluruskan. Sekarang
                cobalah kamu lakukan seperti pada gambar berikut.
            </p>
            <div class="flex justify-around flex-wrap">
                <img src="{{ url('assets/senam_lantai_10.jpg') }}" class="block mx-auto w-96 mt-4" alt="">
                <img src="{{ url('assets/senam_lantai_11.jpg') }}" class="block mx-auto w-96 mt-4" alt="">
            </div>
            <p class="text-center">Gambar 7.2</p>
            
        <li class="font-semibold">Handstand dengan Tangan Disamping</li>
            <img src="{{ url('assets/senam_lantai_12.jpg') }}" class="block mx-auto w-96 mt-4" alt="">
            <p class="text-center">Gambar 7.3</p>
            <p>
                Selain kaki yang dapat diubah posisinya, posisi kedua tangan juga mempunyai berbagai
                variasi. Salah satunya yaitu kedua tangan diluruskan di samping kepala. Kedua kaki tetap
                lurus ke atas.
            </p>
    </ul>

    <h1 class="text-lg text-sky-700 font-bold mt-3">3. Gerak Dasar Kayang</h1>
    <img src="{{ url('assets/senam_lantai_13.jpg') }}" class="block mx-auto w-96 mt-4" alt="">
    <p class="text-center">Gambar 7.3</p>
    <p class="text-justify">
        Gerakan kayang dilakukan dengan awalan posisi badan berdiri tegak. Badan lalu dilentingkan ke
        belakang (sikapp kayang) diikuti dengan kedua lengan lurus ke samping kepala. Kedua telapak tangan
        menempel pada matras atau lantai dibantu dengan guru atau teman.
    </p>

    <h1 class="text-lg text-sky-700 font-bold mt-3">4. Gerak Dasar Sikap Lilin</h1>
    <img src="{{ url('assets/senam_lantai_14.jpg') }}" class="block mx-auto w-96 mt-4" alt="">
    <p class="text-center">Gambar 7.4</p>
    <p class="text-justify">
        Sikap lilin merupakan gerakan mengangkat kaki ke atas dengan ditopang oleh kedua tangan. Awalnya,
        dari posisi terlentang, kaki mendorong ke atas. Punggung menahan berat badan dan tangan mendorong
        pantat ke atas. Pada gerakan berguling ke belakang, kedua tangan secara bersamaan menekan pada matras
        untuk membantu memberikan dorongan pada waktu berguling. Posisi akhir berguling ke belakang adalah
        jongkok menghadap ke matras.
    </p>

    <h1 class="text-lg text-sky-700 font-bold mt-3">5. Gerak Dasar Guling Depan dan Guling Belakang</h1>
    <p class="text-justify">
        Setelah berlajar berguling, apakah kamu percaya diri untuk melakukan gerakan guling depan dan
        guling belakang? Ayo kita berlatih dan belajar guling depan dan guling belakang bersama-sama
        dengan mengikuti langkah-langkah berikut.
    </p>

    <ul style="list-style: lower-alpha" class="ms-8 text-justify">
        <li class="font-semibold">Guling ke Depan <i>Roll Depan</i></li>
            <p>
                Kamu telah mempelajari gerak dasar berguling. Sekarang cobalah gerak guling depan berikut
            </p>
            <ul class="list-decimal ms-8 text-justify">
                <li>
                    Sikap awal jongkok dan kedua kaki rapat. Letakkan lutut di dada dan kedua tangan
                    bertumpu di depan ujung kaki kira-kira 40cm.
                </li>
                <li>
                    Bengkokan kedua tangan, kemudian letakkan pundak pada matras dengan menundukkan kepala
                    hingga dagu sampai dada.
                </li>
                <li>
                    Lanjutkan dengan melakukan gerakan berguling ke depan. Ketika panggul menyentuh matras,
                    peganglah tulang kering dengan kedua tangan menuju posisi jongkok.
                </li>
            </ul>

        <li class="font-semibold">Guling ke Belakang <i>Roll Belakang</i></li>
            <p>
                Sekarang lakukan guling ke belakang dengan langkah-langkah sebagai berikut.
            </p>
            <ul class="list-decimal ms-8 text-justify">
                <li>
                    Sikap awal jongkok dan kedua tangan di depan, dan kaki sedikit rapat.
                </li>
                <li>
                    Kepala ditundukkan, kemudian kaki menolak ke belakang.
                </li>
                <li>
                    Pada saat panggul mengenai matras, kedua tangan segera dilipat ke samping telinga dan
                    telapak tangan menghadap ke bagian atas untuk siap menolak.
                </li>
                <li>
                    Kaki segera diayunkan ke belakang melewati kepala dengan dibantu oleh tolakan dari
                    kedua tangan. Kedua kaki dilipat sampai ujung kaki dapat mendarat di atas matras, lalu
                    kembali ke sikap jongkok. 
                </li>
            </ul>
    </ul>

    <h1 class="text-lg text-sky-700 font-bold mt-3">6. Gerak Dasar Meroda</h1>
    <p class="text-justify">
        Meroda adalah suatu gerakan seperti roda berputar. Saat melakukan gerakan, posisi tubuh akan bertumpu
        di atas kedua tangan dengan kaki yang terbuka lebar. Meroda dapat dilakukan dengan gerakan dari kiri
        ke kanan atau sebaliknya.
    </p>
    <p class="text-justify">
        Gerakan meroda disebut juga gerakan baling-baling atau <i>cart wheel</i>. Gerakan meroda memerlukan
        kemampuan bertumpu dengan kelenturan otot-otot tubuh bagian samping dan sendi panggul. Gerakan
        meroda tampak mudah dilakukan, tetapi sebenarnya gerakan ini memerlukan koordinasi yang baik.
    </p>
    <img src="{{ url('assets/senam_lantai_15.jpg') }}" class="block mx-auto w-96 mt-4" alt="">
    <p class="text-center">Gambar 7.5</p>

    <img src="{{ url('assets/senam_lantai_16.jpg') }}" class="block mx-auto w-96 mt-4" alt="">
    <p class="text-center">Gambar 7.6</p>

    <p class="text-justify">
        Pembelajaran gerakan meroda dapat dibantu oleh guru dari belakang. Pada saat akan jatuh ke samping,
        guru tetap memegang sisi pinggang. Cara melakukan gerakan meroda adalah sebagai berikut.
    </p>

    <ul class="list-decimal ms-8 text-justify">
        <li>
            Mula-mula berdiri tegak menyamping, kedua kaki dibuka sedikit lebar, kedua tangan diangkat lurus
            (menyerupai huruf V), dan pandangan ke depan.
        </li>
        <li>
            Badan dijatuhkan ke samping kiri, tangan kiri diletakkan disamping kaki kiri, kemudian kaki kanan
            diangkat lurus. Selanjutnya, tangan kanan diletakan disamping tangan kiri.
        </li>
        <li>
            Pada saat kaki kanan diayunkan, kaki kiri ditolakkkan pada lantai sehingga kedua kaki terbuka
            dan serong ke samping.
        </li>
        <li>
            Kaki kanan dijatuhkan ke lantai disusul dengan kaki kiri, lalu kembali ke posisi semula.
        </li>
    </ul>

    <img src="{{ url('assets/senam_lantai_17.jpg') }}" class="block mx-auto w-96 mt-4" alt="">
    <p class="text-center">Gambar 7.7</p>
    <p class="text-justify">
        Senam lantai memerlukan ketangkasan yang dilatih secara rutin dan disiplin. Makin sering berlatih,
        maka makin tangkas kamu melakukan gerakan. Selain itu, rasa percaya diri akan menumbuhkan kekuatan
        mental bahwa kamu bisa melakukan senam lantai dengan baik.
    </p>
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
    
        <a href="{{ route('pelajaran4') }}" button type="button"  class="inline-flex flex-col items-center justify-center px-5 border-gray-200 border-x hover:bg-gray-50 dark:hover:bg-gray-800 group dark:border-gray-600">
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