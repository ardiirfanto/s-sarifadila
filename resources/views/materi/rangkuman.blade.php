@extends('layouts.default')

@section('content')
    <main class="p-8">
        <h1 class="md:text-2xl text-xl font-semibold text-center uppercase mb-6"></h1>
        
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <h1 class="md:text-2xl text-xl font-semibold text-center uppercase mb-6">Rangkuman</h1>
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">BAB 1</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">BAB 2</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">BAB 3</button>
                </li>
                <li role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">BAB 4</button>
                </li>
                <li role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">BAB 5</button>
                </li>
            </ul>
        </div>
        <div id="default-tab-content">
            <div class="hidden p-3 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <ul class="list-decimal space-y-2 text-justify">
                <li>
                1. Permainan sepak bola dimainkan oleh dua tim dengan waktu permainan 2 x 45
menit dengan waktu tambahan 2 x 15 menit. Jika belum ada pemenang setelah tambahan waktu 2 x 15 menit, akan dilakukan adu pinalti.
                </li>
                <li>
                2. Keterampilan gerak permainan sepak bola, antara lain menendang, menggiring menghentikan atau mengontrol, menyundul, merebut, melakukan lemparan ke
dalam, dan menjaga gawang..
                </li>
                <li>
                3. Permainan bola basket dimainkan oleh dua tim, yang masing-masing terdiri atas
lima pemain dengan waktu 4 x 10 menit.
                </li>
                <li>
                4. Keterampilan gerak dalam permainan bola basket, antara lain mengoper, menggiring, menembak, lay up, dan pivot.
                </li>
                <li>
                5. Permainan bola tangan dimainkan oleh dua tim yang masing-masing terdiri ates
tujuh pemain dengan waktu 2 x 30 menit.
                </li>
                </ul>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <ul class="list-decimal space-y-1 text-justify">
                    <li>
                   1. Permainan bola voli adalah suatu permainan cepat, artinya waktu bermain dalam satu permainan hanya dibatasi hingga 25 poin.
                    </li>
                    <li>
                     2. Keterampilan gerak yang harus dikuasai dalam bola voli adalah servis, passing,
smes, dan block..
                    </li>
                    <li>
                    3. Permainan bulu tangkis bertujuan memasukkan bola atau kok ke bidang permainan
lawan tanpa dapat dikembalikan.
                    </li>
                    <li>
                    4. eterampilan gerak tanpa kok dalam permainan bulu tangkis, yaitu langkah kaki
(footwork) dan pegangan raket (grip).
                    </li>
                    
                </ul>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <ul class="list-decimal space-y-1 text-justify">
                    <li>
                   1. Nomor lari yang ditinjau dari jumlah nomor dan peserta meliputi lari estafet
dan nomor lomba gabungan.
                    </li>
                    <li>
                    2. Nomor lompat pada atletik
atletik meliputi lompat jauh (long jump), lompat jangkit
(triple jump), lompat galah (polevault), dan lompat tinggi (high jump).
                    </li>
                    <li>
                   3. Nomor lempar pada atletik meliputi tolak peluru (shot put), lempar lembing
(igvelin throw), lenmpar cakram (discus throw), dan lempar martil (hommer).
                    </li>
                    <li>
                    4. Lari jarak pendek (sprint) adalah lari yang ditempuh dalam jarak antara 50-400 m
                    </li>
                    <li>
                    5. Lompat jauh adalah nomor olahraga atletik lompat yang menuntut keterampilan
melompat ke depan sejauh-jauhnya dengan satu kali tolakan.
                    </li>
                </ul>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                <ul class="list-decimal space-y-1 ms-8 text-justify">
                    <li>
                    1. Pencak silat atau silat adalah suatu seni bela diri i tradisional yang berasal dari Indonesia.
                    </li>
                    <li>
                    2. Pada awalnya, pencak silat berfungsi sebagai upaya bertahan atau pembela
diri dari ancaman, khususnya yang datang dari orang lain.
                    </li>
                    <li>
                    3. Permainan bola basket dimainkan oleh dua tim, yang masing-masing terdiri atas lima pemain dengan waktu 4 x 10 menit.
                    </li>
                    <li>
                    4. Seiring dengan perkembangan zaman, fungsi pencak silat berkembang menia
sarana berolahraga, mencurahkan kecintaan pada rasa keindahan gerak, dan
sebagai sarana pendidikan mental dan rohani
                    </li>
                    <li>
                    5. Kuda-kuda dibedakan menjadi tiga jenis, yaitu ringan, sedang, dan berat
                    </li>
                    <li>
                </ul>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                <ul class="list-decimal space-y-1 ms-8 text-justify">
                    <li>
                   1. Kebugaran jasmani adalah dan kemampuan untuk melakukan kerja
kesanggupan
atau aktivitas sehari-hari dengan daya kerja yang maksimal tanpa mengalami
kelelahan yang berlebihan.
                    </li>
                    <li>
                    2. Melatih keseimbangan dapat dilakukan dengan posisi berdiri satu kaki dan sikap
duduk.
                    </li>
                    <li>
                    3. Tes kebugaran jasmani adalah suatu kegiatan untuk mengukur kekuatan dan
tingkat kebugaran seseorang.
                    </li>
                    <li>
                    4. es pengukuran kebugaran jasmani terdiri atas s lari cepat 60 meter, angkat tubuh,
baring duduk, loncat teaak, dan lari jarak jauh.
                    </li>
                </ul>
            </div>
        </div>
    </main>
@endsection