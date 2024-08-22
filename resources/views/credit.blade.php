@extends('layouts.default')

@section('content')
    <main class="p-8">
        
       
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Latar Belakang</button>
                </li>
        
                
            </ul>
        </div>
        <div id="default-tab-content">
        <h1 class="md:text-2xl text-xl font-semibold text-center uppercase mb-6">Panduan Pemakaian</h1>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <ul class="list-decimal space-y-1 ms-8 text-justify">
                    <li>
                    1. Download dan install xampp versi ini pada link
berikut:
https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.1.17/
                    </li>
                    <li>
                    2. Download dan install composer pada link berikut:
https://getcomposer.org/download/
                    </li>
                    <li>
                    3. Download dan install Node JS pada link berikut (Pilih
LTS/Latest):
https://nodejs.org/en/download/current
                    </li>
                    <li>
                    4. Buka localhost (dengan cara seperti gambar dibawah) kemudian buat
database dengan nama db_media_interaktif.
                    </li>
                    <li>
                    5. Ketik perintah php artisan migrate
                    </li>
                    <li>
                    6. lanjutkan dengan mengetik perintah php artisan
db:seed.
                    </li>
                    <li>
                    7. lanjutkan dengan mengetik perintah php artisan
storage:link.
                    </li>
                    <li>
                    Jika sudah selesai, running project dengan perintah php artisan serve,
lalu enter.
                    </li>
                </ul>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <ul class="list-decimal space-y-1 ms-8 text-justify">
                    
                    
                        </ul>
                    </li>
                </ul>
            </div>
            
        </div>
    </main>
    
@endsection