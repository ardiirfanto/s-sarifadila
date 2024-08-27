<?php

use App\Http\Controllers\GuruPages;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Livewire\PelajaranPages\Pelajaran1;
use App\Http\Controllers\AnswerHandleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\SubMateriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [PagesController::class, 'index'])->name('home')->middleware('guest');

Route::group(['middleware' => ['auth', 'HakAkses:siswa']], function(){
    Route::get('/kuis/{code}', [PagesController::class, 'kuisPage'])->name('kuisPage');
    Route::get('/hasil/{nilai}', [PagesController::class, 'hasilPage'])->name('kuisPage');
    Route::get('/handle-answer/{data}', [AnswerHandleController::class, 'store']);

    Route::get('/request-mark', [AnswerHandleController::class, 'calculateAnswerMark']);
    Route::get('/login-quiz', [PagesController::class, 'loginQuiz']);
    Route::post('/quiz-submit', [AnswerHandleController::class, 'saveQuizAnswer'])->name("quiz.submit");

    Route::prefix('pelajaran-1')->group(function () {
        Route::get('/', [PagesController::class, 'pelajaran1'])->name('pelajaran1');
        Route::get('/jalan-cepat', [PagesController::class, 'jalanCepat'])->name('jalanCepat');
        Route::get('/lari-jarak-pendek', [PagesController::class, 'lariJarakPendek'])->name('lariJarakPendek');
        Route::get('/lompat-jauh', [PagesController::class, 'lompatJauh'])->name('lompatJauh');
    });

    Route::prefix('pelajaran-2')->group(function () {
        Route::get('/', [PagesController::class, 'pelajaran2'])->name('pelajaran2');
        Route::get('/gerak-nonlokomotor', [PagesController::class, 'gerakNonlokomotor'])->name('gerakNonlokomotor');
        Route::get('/gerak-dasar-nonlokomotor', [PagesController::class, 'gerakDasarNonlokomotor'])->name('gerakDasarNonlokomotor');
        Route::get('/permainan-gerak-nonlokomotor', [PagesController::class, 'permainanGerakNonlokomotor'])->name('permainanGerakNonlokomotor');
    });

    Route::prefix('pelajaran-3')->group(function () {
        Route::get('/', [PagesController::class, 'pelajaran3'])->name('pelajaran3');
        Route::get('/dasar-tangkap-lempar-basket', [PagesController::class, 'dasarTangkapLemparBasket'])->name('dasarTangkapLemparBasket');
        Route::get('/dasar-tangkap-lempar-kasti', [PagesController::class, 'dasarTangkapLemparKasti'])->name('dasarTangkapLemparKasti');
        Route::get('/dasar-tangkap-lempar-kastis', [PagesController::class, 'dasarTangkapLemparKastis'])->name('dasarTangkapLemparKastis');
        Route::get('/dasar-tangkap-lempar-kastil', [PagesController::class, 'dasarTangkapLemparKastil'])->name('dasarTangkapLemparKastil');
    });

    Route::prefix('pelajaran-4')->group(function () {
        Route::get('/', [PagesController::class, 'pelajaran4'])->name('pelajaran4');
        Route::get('/senam-lantai-lokomotor', [PagesController::class, 'senamLantai'])->name('senamLantai');
        Route::get('/senam-lantai-nonlokomotor', [PagesController::class, 'senamLantaiNonlokomotor'])->name('senamLantaiNonlokomotor');
        Route::get('/manipulatif-senam-lantai', [PagesController::class, 'manipulatifSenamLantai'])->name('manipulatifSenamLantai');
    });

    Route::prefix('pelajaran-5')->group(function () {
        Route::get('/', [PagesController::class, 'pelajaran5'])->name('pelajaran5');
        Route::get('/senam-lantai-lokomotor1', [PagesController::class, 'senamLantai1'])->name('senamLantai1');
        Route::get('/senam-lantai-nonlokomotor1', [PagesController::class, 'senamLantaiNonlokomotor1'])->name('senamLantaiNonlokomotor1');
        Route::get('/manipulatif-senam-lantai1', [PagesController::class, 'manipulatifSenamLantai1'])->name('manipulatifSenamLantai1');
    });

    Route::prefix('petunjuk')->group(function () {
        Route::get('/pelajaran-1', [PagesController::class, 'petunjuk1'])->name('petunjuk1');
        Route::get('/pelajaran-2', [PagesController::class, 'petunjuk2'])->name('petunjuk2');
        Route::get('/pelajaran-3', [PagesController::class, 'petunjuk3'])->name('petunjuk3');
        Route::get('/pelajaran-4', [PagesController::class, 'petunjuk4'])->name('petunjuk4');
    });

    Route::get('/rangkuman', [PagesController::class, 'rangkuman'])->name('rangkuman');
    Route::get('/credit', [PagesController::class, 'credit'])->name('credit');
    // Route::get('/home', [PagesController::class, 'home'])->name('home');
    Route::get('/informasi', [PagesController::class, 'informasi'])->name('informasi');
    Route::get('/nilai', [PagesController::class, 'nilai'])->name('nilai');

    // NEW PAGE
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::get('/submateri/{idmateri}', [HomeController::class, 'submateri'])->name('submateri');
});

Route::group(['middleware' => ['auth', 'HakAkses:guru']], function(){
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [GuruPages::class, 'index'])->name('dashboard');
        Route::get('/kuis', [GuruPages::class, 'kuisPage'])->name('kuisPageGuru');
        Route::get('/detail-kuis/{id}', [GuruPages::class, 'detailQuiz'])->name('detailQuiz');
        Route::get('/hasil-kuis', [GuruPages::class, 'hasilKuis'])->name('hasilKuis');
        Route::get('/daftar-siswa', [GuruPages::class, 'daftarSiswa'])->name('daftarSiswa');
        Route::get('/videomateri', [GuruPages::class, 'videomateri'])->name('videomateri');
        Route::get('/kelolamateri', [GuruPages::class, 'kelolamateri'])->name('kelolamateri');
        Route::get('/tambahmateri', [GuruPages::class, 'tambahmateri'])->name('tambahmateri');
        Route::get('/kelolasubmateri/{materiid}', [GuruPages::class, 'kelolasubmateri'])->name('kelolasubmateri');
        Route::get('/tambahsubmateri/{materiid}', [GuruPages::class, 'tambahsubmateri'])->name('tambahsubmateri');

        Route::prefix('materi')->group(function(){
            Route::post('store',[MateriController::class,'store'])->name('materi.store');
            Route::get('del/{id}',[MateriController::class,'delete'])->name('materi.delete');
        });
        Route::prefix('submateri')->group(function(){
            Route::post('store',[SubMateriController::class,'store'])->name('submateri.store');
            Route::get('del/{id}',[SubMateriController::class,'delete'])->name('submateri.delete');
        });
    });
});

Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');
Route::post('/loginProcess', [LoginController::class, 'loginProcess'])->middleware('guest');
Route::get('/login', [LoginController::class, 'loginPage'])->name('login')->middleware('guest');
