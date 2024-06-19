@extends('layouts.materixx')

@section('content')
    <h1 class="text-xl text-orange-700 font-bold">B. Gerak Dasar Nonlokomtor</h1>
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
        Seperti yang telah disebutkan sebelumnya, diantara gerak nonlokomotor terdapat 3 gerakan utama
        yaitu gerakan mengayun, memutar, dan menekuk. Ketiga gerakan tersebut dapat kita lakukan karena
        adanya persendian pada tulang. Untuk lebih memahaminya, mari kita pelajari satu persatu.
    </p>

    <h1 class="text-lg text-sky-700 font-bold mt-5">1. Gerakan Mengayun</h1>
    <p class="text-justify">
        Gerakan mengayun hanya dapat dilakukan oleh anggota tubuh tungkai yaitu lengan, dan kaki.
        Bagian persendian yang bekerja adalah persendian pangkal paha dan pangkal lengan atau bahu.
        Berikut adalah cara dan manfaat dari gerakan mengayunkan lengan dan kaki.
    </p>
    <ul style="list-style: lower-alpha" class="ms-8 text-justify">
        <li class="font-semibold">Mengayun Lengan</li>
            <p>
                Gerakan ini dilakukan dengan mengayunkan kedua lengan dengan arah yang berlawanan.
            </p>
            <ul class="ms-8 list-decimal">
                <li>
                    Gerakan diawali dengan berdiri tegak serta kedua lengan disamping badan.
                    Ayunkan lengan kedepan dan ke belakang secara bersamaan.
                </li>
                <li>
                    Gerakan mengayun juga dapat diubah arahnya menjadi ke atas dan samping.
                </li>
            </ul>
    </ul>
    <img src="{{ url('assets/nonlokomotor_2.jpg') }}" class="block mx-auto w-96 mt-5" alt="">
    <p class="text-center">Gambar 2.2</p>

    <h1 class="text-lg text-sky-700 font-bold">2. Gerakan Memutar</h1>
    <p class="text-justify">
        Gerakan memutar ada banyak macamnya. Beberapa diantaranya adalah gerakan memutar kepala,
        memutar kepala, memutar pinggang, memutar lengan, dan masih banyak lagi. Beberapa gerakan
        memutar adalah sebagai berikut.
    </p>
    <ul style="list-style: lower-alpha" class="ms-8 text-justify">
        <li class="font-semibold">Memutar Kepala</li>
            <p>
                Gerakan ini sangat mudah dilakukan. Kepala diputar dengan bertumpu pada leher.
                Putaran dapat mengarah ke kanan atau ke kiri. Awali gerakan dengan berdiri tegak
                sambil bertolak pinggang. Gerakkan bagian leher searah jarum jam dalam 8 hitungan.
                Setelah itu, lakukan ke arah sebaliknya juga dalam 8 hitungan.
            </p>
            <p>
                Meskipun mudah dilakukan, namun gerakan ini memiliki manfaat sebagai berikut.
            </p>
            <ul class="ms-8 list-decimal">
                <li>
                    Memperlancar aliran darah ke daerah leher dan kepala.
                </li>
                <li>
                    Menambah suplai oksigen sehingga meningkatkan fungsi otak.
                </li>
                <li>
                    Membantu rekaksasi (membuat santai) dan mengurangi rasa pegal pada bagian leher.
                </li>
            </ul>
            <img src="{{ url('assets/nonlokomotor_3.jpg') }}" class="block mx-auto w-96 mt-3" alt="">
            <p class="text-center">Gambar 2.3</p>
        <li class="font-semibold">Memutar Pinggang</li>
            <p>
                Seperti memutar kepala, kali ini kita memutarkan bagian pinggang. Berdirilah tegak
                dengan kedua kaki sejajar bahu. Kedua tangan berada di pinggang. Putar pinggang
                searah jarum jam selama 8 hitungan. Selanjutnya, lakukan ke arah sebaliknya dengan waktu
                hitungan yang sama.
            </p>
            <p>
                Manfaat gerakkan memutar pinggang yang kita lakukan adalah sebagai berikut.
            </p>
            <ul class="ms-8 list-decimal">
                <li>
                    Memperkuat otot perut.
                </li>
                <li>
                    Menjaga kelenturan pinggang.
                </li>
                <li>
                    Mengurangi rasa pegal dan nyeri di daerah pinggang akibat banyak beraktifitas.
                </li>
            </ul>
            <img src="{{ url('assets/nonlokomotor_4.jpg') }}" class="block mx-auto w-96 mt-3" alt="">
            <p class="text-center">Gambar 2.4</p>
    </ul>

    <h1 class="text-lg text-sky-700 font-bold">3. Gerakan Menekuk</h1>
    <p class="text-justify">
        Gerkan terakhir pada gerakan nonlokomotor adalah gerakan menekuk. Gerakan menekuk dapat terjadi
        juga karena kerja persendian pada tulang-tulang kita.
    </p>
    <ul style="list-style: lower-alpha" class="ms-8 text-justify">
        <li class="font-semibold">Menekuk Siku Lengan</li>
            <p class="text-justify">
                Gerakan menekuk siku lengan dilakukan sambil berdiri dengan bantuan dinding.
                Praktiknya, gerakan ini sama dengan gerakan push up. Cara melakukan gerakan menekuk
                siku lengan cukup mudah namun membutuhkan tenaga ekstra. Berdiri tegak menghadap
                dinding dengan lengan lurus ke depan. Tempelkan telapak tangan ke dinding kemudian
                tekuk siku hingga kepala merapat. Selanjutnya, dorong tubuh menjauh, dari dinding
                hingga lengan kembali lurus.
            </p>
            <p class="text-justify">
                Manfaat dari gerakan adalah sebagai berikut
            </p>
            <ul class="list-decimal ms-8">
                <li>
                    Membentuk dan menguatkan otot-otot lengan atas dan dada.
                </li>
                <li>
                    Meningkatkan volume paru-paru untuk menyerap oksigen.
                </li>
                <li>
                    Memperlancar pernapasan.
                </li>
            </ul>
            <img src="{{ url('assets/nonlokomotor_5.jpg') }}" class="block mx-auto w-96 mt-5" alt="">
            <p class="text-center">Gambar 2.</p>
        <li class="font-semibold">Menekuk Lutut</li>
            <p class="text-justify">
                Cara gerakan menekuk lutut diawali dengan berdiri tegak. Kedua lengan berada disamping
                tubuh. Angkat kedua lengan lurus kedepan. Berjinkatlah dengan kedua kaki, lalu tahan
                selama 5 hitungan. Sambil tetap berjingkat, turunkan tubuhmu dengan perlahan-lahan.
                Lakukan berulang-ulang dengan petunjuk gurumu.
            </p>
            <p class="text-justify">
                Gerakan menekuk lutut sangat bermanfaat bagi kaki kita. Beberapa manfaat yang dapat kita peroleh.
            </p>
            <ul class="list-decimal text-justify ms-8">
                <li>
                    Otot-otot dan persendian pangkal paha, betis, dan jari-jari kaki akan semakin
                    bertambah kekuatannya.
                </li>
                <li>
                    Otot-otot perut juga akan semakin kuat dan terlatih untuk menahan beban tubuh
                    saat menurun.
                </li>
                <li>
                    Meningkatkan keseimbangan tubuh.
                </li>
            </ul>
            <img src="{{ url('assets/nonlokomotor_6.jpg') }}" class="block mx-auto w-72 mt-5" alt="">
            <p class="text-center">Gambar 2.6</p>

        <li class="font-semibold">Menekuk Bagian Bawah Tubuh ke Atas</li>
            <p class="text-justify">
                Gerakkan menekuk pangkal paha dapat dilakukan sambil berbaring tertelungkup.
                Sebenarnya otot-otot yang bekerja saat melakukan gerakan ini adalah otot perut
                dan punggung serta persendian tulang belakang. Bila dibandingkan dengan menekkukan
                badan ke depan, maka gerakan ini terbatas namun membutuhkan tenaga ekstra. Lakukan
                gerakan ini dengan tidur tertelungkap. Topang dagu dengan kedua tangan yang menangkup.
                Angkat kedua kaki dengan dada sebagai tumpuan. Tahan selama 8 hitungan. Setelah kembali
                ke posisi awal, ulangi lagi gerakan ini.
            </p>
            <p class="text-justify">
                Manfaat gerakan ini adalah sebagai berikut.
            </p>
            <ul class="list-decimal text-justify ms-8">
                <li>
                    Menguatkan otot perut.
                </li>
                <li>
                    Mengurangi rasa pegal pada persendian tulang belakang.
                </li>
                <li>
                    Dapat membantu memperbaiki bentuk tulang belakang.
                </li>
                <li>
                    Menambahkan keseimbangan dan daya tahan.
                </li>
            </ul>
            <img src="{{ url('assets/nonlokomotor_7.jpg') }}" class="block mx-auto w-96 mt-5" alt="">
            <p class="text-center">Gambar 2.7</p>
        <li class="font-semibold">Menekuk Badan</li>
            <p class="text-justify">
                Gerakan menekuk badan dapat dilakukan sambil berdiri (membungkuk) atau sambil duduk.
                Keduanya memiliki kesamaan gerakan, yaitu sama-sama meneyntuhkan ujung jari tangan
                dengan ujung jari kaki. Cara gerakan dapat diperhatikan dalam gambar.
            </p>
            <p class="text-justify">
                Manfaat yang dapat kita peroleh dari gerakan menekuk badan adalah sebagai berikut.
            </p>
            <ul class="list-decimal ms-8">
                <li>
                    Membantu meregangkan otot-otot betis dan paha.
                </li>
                <li>
                    Menguatkan otot-otot perut.
                </li>
                <li>
                    Mengurangi rasa pegal atau nyeri pada pinggang.
                </li>
                <li>
                    Menambah kelenturan pinggang.
                </li>
            </ul>
            <div class="flex flex-wrap justify-around">
                <img src="{{ url('assets/nonlokomotor_8.jpg') }}" class="block mx-auto w-96 mt-5" alt="">
                <img src="{{ url('assets/nonlokomotor_9.jpg') }}" class="block mx-auto w-96 mt-5" alt="">
            </div>
            <p class="text-center">Gambar 2.8</p>
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
    
        <a href="{{ route('pelajaran2') }}" button type="button"  class="inline-flex flex-col items-center justify-center px-5 border-gray-200 border-x hover:bg-gray-50 dark:hover:bg-gray-800 group dark:border-gray-600">
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