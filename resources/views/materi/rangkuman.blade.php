@extends('layouts.default')

@section('content')
    <main class="p-8">
        <h1 class="md:text-2xl text-xl font-semibold text-center uppercase mb-6">Rangkuman</h1>
        
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Pelajaran 1</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Pelajaran 2</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Pelajaran 3</button>
                </li>
                <li role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Pelajaran 4</button>
                </li>
            </ul>
        </div>
        <div id="default-tab-content">
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <ul class="list-decimal space-y-1 ms-8 text-justify">
                    <li>
                        Jalan cepat adalah gerakan melangkahkan kaki dengan kondisi tubuh tidak melayang di udara.
                    </li>
                    <li>
                        Baik lomba jalan cepat maupun lari cepat harus memperhatikan posisi badan, ayunan lengan, ayunan langkah, dan saat memasuki finish.
                    </li>
                    <li>
                        Posisi badan mulai dari kepala, punggung, dan bahu harus rileks, tegak dan pandangan lurus.
                    </li>
                    <li>
                        Ayunan tangan atau tangan jalan cepat beriringan harmonis, dengan gerakan kaki yang berlawanan dan jari-jari tangan mengepal rileks.
                    </li>
                    <li>
                        Langkah kaki jalan cepat pendek-pendek, cepat, dan tidak diangkat terlalu tinggi, serta paha kiri rileks dan otot lutut dikencangkan.
                    </li>
                    <li>
                        Cara start lari jarak pendek atau sprint adalah start jongkok.
                    </li>
                    <li>
                        Start jongkok terbagi tiga, yaitu start pendek, start mengengah, dan start panjang.
                    </li>
                    <li>
                        Aba-aba start lari jarak pendek: bersedia-siap-ya.
                    </li>
                    <li>
                        Dalam lompat jauh terdapat 4 sikap atau teknik yang harus dipelajari, yaitu teknik awalan, teknik tolakan, teknik melayang, dan teknik mendarat.
                    </li>
                    <li>
                        Saat menolakkan tubuh pada lompat jauh, gunakan kaki yang terkuat.
                    </li>
                    <li>
                        Untuk mengurangi kemungkinan cidera, lakukan pendaratan dengan kaki berimpit.
                    </li>
                </ul>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <ul class="list-decimal space-y-1 ms-8 text-justify">
                    <li>
                        Gerakan merupakan perubahan posisi atau kedudukan anggota tubuh atau seluruh tubuh.
                    </li>
                    <li>
                        Gerakan pada olahraga terbagi ke dalam 2 kelompok utama, yaitu gerak nonlokomotor dan gerak lokomotor.
                    </li>
                    <li>
                        Gerak nonlokomotor umumnya digunakan dalam pemanasan sebelum olahraga inti.
                    </li>
                    <li>
                        Gerak nonlokomotor umumnya terdiri dari gerakan mengayun, memutar dan menekuk.
                    </li>
                    <li>
                        Gerakan mengayun memutar dan menekuk memiliki manfaat diantaranya sebagai berikut.
                        <ul class="list-disc ms-8 text-justify space-y-1">
                            <li>
                                Melatih kekuatan dan daya tahan otot-otot.
                            </li>
                            <li>
                                Mengatasi atau mengurangi pegal dan nyeri pada tubuh.
                            </li>
                            <li>
                                Memperkuat kelenturan otot dan persendian.
                            </li>
                            <li>
                                Memperlancar pernapasan.
                            </li>
                            <li>
                                Meningkatkan daya tahan jantung.
                            </li>
                            <li>
                                Meningkatkan kestabilan dan keseimbangan tubuh.
                            </li>
                            <li>
                                Mengurangi resiko cedera otot dan persendian.
                            </li>
                            <li>
                                Meningkatkan koordinasi antar anggota tubuh.
                            </li>
                            <li>
                                Memperlancar aliran darah.
                            </li>
                            <li>
                                Membantu relaksasi atau rasa santai pada tubuh.
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <ul class="list-decimal space-y-1 ms-8 text-justify">
                    <li>
                        Cara melempar dan menangkap bola dalam permainan kasti dan rounders adalah melempar dan menangkap bola rendah, bola datar, dan bola tinggi.
                    </li>
                    <li>
                        Berlatih dengan baik harus memperhatikan pula kemampuan dan kekuatan diri, agar dalam bermain atau bertanding dapat saling kerja sama untuk menutup kelemahan anggotanya masing-masing.
                    </li>
                    <li>
                        Melempar dan menangkap bola dalam permainan basket dilakukan setinggi dada, atas kepala, samping, dan pantukan.
                    </li>
                    <li>
                        Pivot adalah gerak memutar badan sambil memegang bola dalam permainan bola basket, dengan satu kaki sebagai poros putarnya.
                    </li>
                    <li>
                        Lay up shoot adalah gerak langkah dalam permainan bola basket baik untuk mengoper atau memasukan bola tidak lebih dari 2 langkah.
                    </li>
                </ul>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                <ul class="list-decimal space-y-1 ms-8 text-justify">
                    <li>
                        Gerak dasar senam lantai antara lain bertumpu, bergantung, keseimbangan, berpindah tempat, berguling, berputar, dan mengayuh.
                    </li>
                    <li>
                        Untuk melakukan gerakan senam lantai, diperlukan sikap percaya diri, disiplin latihan, bekerja sama, dan bertanggung jawab.
                    </li>
                    <li>
                        Agar tidak terjadi cedera, gerakan senam harus benar dan berhati-hati, melakukan persiapan diri, serta di bawah pengawasan orang yang telah terlatih.
                    </li>
                    <li>
                        Senam lantai memerlukan ketangkasan. Makin sering berlatih, makin tangkas gerakannya.
                    </li>
                </ul>
            </div>
        </div>
    </main>
@endsection