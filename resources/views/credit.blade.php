@extends('layouts.default')

@section('content')
    <main class="p-8">
        <h1 class="md:text-2xl text-xl font-semibold text-center uppercase mb-6">Pendahuluan</h1>
       
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Latar Belakang</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Tujuan</button>
                
            </ul>
        </div>
        <div id="default-tab-content">
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <ul class="list-decimal space-y-1 ms-8 text-justify">
                    <li>
                    Kemajuan teknologi telah menciptakan perubahan signifikan dalam berbagai sector, termasuk bidang pendidikan. Di era modern ini, guru-guru memiliki tanggu jawab untuk meningkatkan kualitas pendidikan dengan berbagai cara. Salah satunya menggunakan media pembelajaran. Media Pembelajaran digunakan untuk memperagakan fakta, konsep, prinsip atau prosedur tertentu agar tampak lebih nyata atau konkrit. Proses pembelajaran menjadi lebih menarik apabila menggunakan media yang tepat, sehingga siswa termotivasi untuk mencintai ilmu pengetahuan yang sedang dipelajarinya.
                    </li>
                    <li>
                    Saat ini, SD Negeri 004 Bagan Besar Dumai masih menggunakan buku cetak sebagai sumber utama pembelajaran untuk materi Pendidikan Jasmani Olahraga dan Kesehatan (PJOK) kelas 4 saat ini guru masih menggunakan pendekatan konvensional dengan buku cetak sebagai sumber utama materi, dan guru sebagai penyampai informasi. Sayangnya, peserta didik belum sepenuhnya memahami dan antusias dalam pembelajaran ini. Terkadang, guru sudah menggunakan slide PowerPoint untuk mendukung penyajian materi pembelajaran. Namun, penggunaan media slide PowerPoint saja belum cukup untuk menghasilkan pembelajaran yang efektif dan interaktif. Hal ini berbanding terbalik dengan pengalaman pembelajaran di luar ruang kelas atau praktikum, di mana peserta didik tampak kurang antusias dan kehilangan semangat saat berada di dalam ruang kelas, hal ini terlihat banyak siswa yang masih bermain di saat guru memberikan penjelasan materi, karna mereka lebih tertarik untuk segera melakukan praktikum. Sementara pemahaman materi sebelum praktikum yang di ajarkan guru sangatlah penting untuk di pahami oleh siswa agar tidak terjadi kecelakaan saat berolahraga.
                    </li>
                    <li>
                    Untuk mengatasi permasalahan ini, diperlukan pengembangan media pembelajaran interaktif yang sesuai dengan kebutuhan siswa. Anak-anak pada usia ini justru menunjukkan respon yang lebih positif terhadap pembelajaran yang bersifat interaktif, visual, dan berbasis teknologi, dikarenakan itu dibutuhkan suatu media yang dapat membantu guru dalam menyajikan materi pembelajaan yang menarik. Penggunaan elemen suara, gambar bergerak, dan media grafis yang berkualitas dapat membuat proses belajar mengajar lebih menyenangkan dan interaktif.
                    </li>
                
                </ul>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <ul class="list-decimal space-y-1 ms-8 text-justify">
                    <li>
                    Penelitian ini diharapkan dapat membantu guru untuk menerapkan 
                   model pembelajaran yang berbeda agar dapat meningkatkan hasil 
                   belajar peserta didik

                    </li>
                    <li>
                    Dengan media pembelajaran berbasis android ini diharapkan dapat 
                   meningkatkan pemahaman peserta didik, sehingga lebih efektif dan 
                   meningkatkan kualitas proses belajar mengajar. 
.
                    </li>
                    
                        </ul>
                    </li>
                </ul>
            </div>
            
        </div>
    </main>
    
@endsection