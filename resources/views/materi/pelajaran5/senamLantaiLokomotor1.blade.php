@extends('layouts.materixx')

@section('content')
    <h1 class="text-xl text-orange-700 font-bold">Avan2</h1>
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
    <h1 class="text-lg text-sky-700 font-bold">1sar Melompat dan Bertumpu</h1>
    <p class="text-justify">
        Bertumpu berarti melakukan tahanan untuk menolak atau mendarat. Tumit kuat untuk menopang seluruh berat
        badan. Gerak dasar bertumpu ini dapat dilakukan dengan tumpuan tangan ataupun kaki. Katfititas loncat jongkok
        adalah merupakan salah satu gerak dasar bertumpu pada kaki. Aktifitas pembelajaran loncat jongkok di
        lantai dengan atau meloncati boks/peti.
    </p>
    <p class="text-justify">
        Gerakan bertumpu pada kedua tangan dan kaki ini dapat dilakukan secara berkelompok. Coba kamu praktikan
        seperti pada gambar 5.1 berikut dengan diawasi guru.
    </p>
    <img src="{{ url('assets/senam_lantai_1.jpg') }}" class="block mx-auto w-72 mt-4" alt="">
    <p class="text-center">Gambar 5.1</p>

    <h1 class="text-lg text-sky-700 font-bold mt-3">2. Gerak Dasar Bergantung</h1>
    <p class="text-justify">
        Latihan menggantung dapat dilakukan sendiri atau berpasangan. Cara melakukan latihan menggantung sebagai
        berikut.
    </p>
    <ul class="list-decimal ms-8">
        <li>
            Naik ke atas bangku yang telah disiapkan.
        </li>
        <li>
            Pegang palang dengan kedua telapak tangan menghadap ke depan dan selebar bahu.
        </li>
        <li>
            Peserta latihan berikutnya membantu menyingkirkan bangku agar posisi lengan teman bergantung
            lurus.
        </li>
        <li>
            Setelah ada aba-aba "Mulai", pindahkan tangan satu persatu.
        </li>
        <li>
            Lakukan aktifitas bergantung sambil berpindah dari ujung ke ujung secara berulang.
        </li>
    </ul>
    <img src="{{ url('assets/senam_lantai_2.jpg') }}" class="block mx-auto w-72 mt-4" alt="">
    <p class="text-center">Gambar 5.2</p>

    <h1 class="text-lg text-sky-700 font-bold mt-3">3. Gerak Dasar Berpindah dengan Berguling</h1>
    <p class="text-justify">
        Gerakan berguling dapat dilakukan dengan berbagai variasi. Latihan gerak dasar berguling pada senam
        lantai bisa berupa guling depan dan guling belakang.
    </p>
    <p class="text-justify">
        Variasi berguling dimulai dari posisi jongkok di matras tinggi. Perhatikan gambar guling depan
        (Gambar 5.3) dan guling belakang (Gambar 5.4) berikut. Setelah kamu mengamati gerakan, lakukan
        gerakan, lakukan gerakan dengan diawasi gurumu.
    </p>
    <div class="flex justify-around flex-wrap items-center">
        <div>
            <img src="{{ url('assets/senam_lantai_3.jpg') }}" class="block mx-auto w-96 mt-4" alt="">
            <p class="text-center">Gambar 5.3</p>
        </div>
        <div>
            <img src="{{ url('assets/senam_lantai_4.jpg') }}" class="block mx-auto w-96 mt-4" alt="">
            <p class="text-center">Gambar 5.4</p>
        </div>
    </div>

    <h1 class="text-lg text-sky-700 font-bold mt-3">4. Gerak Mengayun di Tempat</h1>
    <p class="text-justify">
        Gerak dasar mengayun dapat berupa ayunan tangan dan ayunan kaki. Cara melakukannya diawali dari
        sikap tegak. Tangan mengayun ke samping dan ke atas. Kemudian bergantian dengan kaki mengayun
        ke samping (kaki kangkang), kedepan dan kebelakang. Saat mengayun tangan dan kaki reflems seperti
        melayang.
    </p>
    <img src="{{ url('assets/senam_lantai_5.jpg') }}" class="block mx-auto w-96 mt-4" alt="">
    <p class="text-center">Gambar 5.5</p>
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