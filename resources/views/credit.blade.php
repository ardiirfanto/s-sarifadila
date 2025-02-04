@extends('layouts.materixx')

@section('content')
    <main class="p-8">
        
       
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
            
        
                
            </ul>
        </div>
        <div class="container">
      <div class="element-heading">
        <h6>Panduan Pemakaian</h6>
      </div>
    </div>

    <div class="container">
      <div class="card">
        <div class="card-body">
        1. Download dan install xampp versi ini pada link
berikut:
https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.1.17/
                    <br>
                    2. Download dan install composer pada link berikut:
https://getcomposer.org/download/
<br>
                    3. Download dan install Node JS pada link berikut (Pilih
LTS/Latest):
https://nodejs.org/en/download/current
<br>
                    4. Buka localhost (dengan cara seperti gambar dibawah) kemudian buat
database dengan nama db_media_interaktif.
<br>
                    5. Ketik perintah php artisan migrate
                    <br>
                    6. lanjutkan dengan mengetik perintah php artisan
db:seed.
<br>
                    7. lanjutkan dengan mengetik perintah php artisan
storage:link.
<br>
                    Jika sudah selesai, running project dengan perintah php artisan serve,
lalu enter.
<br>
        </div>
      </div>
    </div>
        <div id="default-tab-content">
        
            
        </div>
    </main>
    
@endsection