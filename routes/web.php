<?php

use App\Http\Controllers\GuruPages;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Livewire\PelajaranPages\Pelajaran1;
use App\Http\Controllers\AnswerHandleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KurikulumPages;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\QuizController;
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

Route::group(['middleware' => ['auth', 'HakAkses:siswa']], function () {
    Route::get('/kuis/{code}', [PagesController::class, 'kuisPage'])->name('kuisPage');
    Route::get('/hasil/{nilai}', [PagesController::class, 'hasilPage'])->name('kuisPage');
    Route::get('/handle-answer/{data}', [AnswerHandleController::class, 'store']);

    Route::get('/request-mark', [AnswerHandleController::class, 'calculateAnswerMark']);
    Route::get('/login-quiz', [PagesController::class, 'loginQuiz']);
    Route::post('/quiz-submit', [AnswerHandleController::class, 'saveQuizAnswer'])->name("quiz.submit");

    // Trashed
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
    // End::Trashed

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
    Route::get('/lihat-nilai-quiz', [PagesController::class, 'lihatNilaiQuiz'])->name('lihat-nilai-quiz');

    // NEW PAGE
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::get('/materi/{idmapel}', [HomeController::class, 'materi'])->name('materi');
    Route::get('/submateri/{idmateri}', [HomeController::class, 'submateri'])->name('submateri');
    Route::get('/detailsubmateri/{idsubmateri}', [HomeController::class, 'detailsubmateri'])->name('detailsubmateri');
    Route::prefix('ajax')->group(function () {
        Route::get('soal/{code}', [QuizController::class, 'view_soal'])->name('ajax.soal');
        Route::post('store_answer', [QuizController::class, 'store_answer'])->name('ajax.store_answer');
    });
    Route::get('quiz_nilai/{code}', [QuizController::class, 'view_nilai'])->name('quiz_nilai');
});

Route::group(['middleware' => ['auth', 'HakAkses:guru']], function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [GuruPages::class, 'index'])->name('dashboard');
        Route::get('/materi-guru/{idmapel}', [GuruPages::class, 'materiPage'])->name('materi-guru');
        Route::get('/kuis', [GuruPages::class, 'kuisPage'])->name('kuisPageGuru');
        Route::get('/detail-kuis/{id}', [GuruPages::class, 'detailQuiz'])->name('detailQuiz');
        Route::get('/hasil-kuis', [GuruPages::class, 'hasilKuis'])->name('hasilKuis');
        Route::get('/daftar-siswa', [GuruPages::class, 'daftarSiswa'])->name('daftarSiswa');
        Route::get('/videomateri/{idmapel}', [GuruPages::class, 'videomateri'])->name('videomateri');
        Route::get('/kelolamateri/{idmapel}', [GuruPages::class, 'kelolamateri'])->name('kelolamateri');
        Route::get('/tambahmateri/{idmapel}', [GuruPages::class, 'tambahmateri'])->name('tambahmateri');
        Route::get('/kelolasubmateri/{materiid}', [GuruPages::class, 'kelolasubmateri'])->name('kelolasubmateri');
        Route::get('/tambahsubmateri/{materiid}', [GuruPages::class, 'tambahsubmateri'])->name('tambahsubmateri');
        Route::get('/ubahsubmateri/{submateriid}', [GuruPages::class, 'ubahsubmateri'])->name('ubahsubmateri');

        Route::prefix('materi')->group(function () {
            Route::post('store', [MateriController::class, 'store'])->name('materi.store');
            Route::get('del/{id}', [MateriController::class, 'delete'])->name('materi.delete');
        });
        Route::prefix('submateri')->group(function () {
            Route::post('store', [SubMateriController::class, 'store'])->name('submateri.store');
            Route::post('update', [SubMateriController::class, 'update'])->name('submateri.update');
            Route::get('del/{id}', [SubMateriController::class, 'delete'])->name('submateri.delete');
        });
    });
});


Route::group(['middleware' => ['auth', 'HakAkses:kurikulum']], function () {
    Route::get('/dashboard-kurikulum', [KurikulumPages::class, 'index'])->name('dashboard-kurikulum');

    Route::prefix('daftar-guru')->group(function () {
        Route::get('/', [KurikulumPages::class, 'daftarGuru'])->name('daftar-guru');
        Route::get('add', [KurikulumPages::class, 'addGuru'])->name('daftar-guru.add');
        Route::post('store', [KurikulumPages::class, 'storeGuru'])->name('daftar-guru.store');
        Route::get('edit/{id}', [KurikulumPages::class, 'editGuru'])->name('daftar-guru.edit');
        Route::post('update', [KurikulumPages::class, 'updateGuru'])->name('daftar-guru.update');
        Route::get('delete/{id}', [KurikulumPages::class, 'deleteGuru'])->name('daftar-guru.delete');
    });

    Route::prefix('daftar-mapel')->group(function () {
        Route::get('/', [KurikulumPages::class, 'daftarMapel'])->name('daftar-mapel');
        Route::get('add', [KurikulumPages::class, 'addMapel'])->name('daftar-mapel.add');
        Route::post('store', [KurikulumPages::class, 'storeMapel'])->name('daftar-mapel.store');
        Route::get('edit/{id}', [KurikulumPages::class, 'editMapel'])->name('daftar-mapel.edit');
        Route::post('update', [KurikulumPages::class, 'updateMapel'])->name('daftar-mapel.update');
        Route::get('delete/{id}', [KurikulumPages::class, 'deleteMapel'])->name('daftar-mapel.delete');
    });

    Route::prefix('daftar-siswa')->group(function () {
        Route::get('/', [KurikulumPages::class, 'daftarSiswa'])->name('daftar-siswa');
        Route::get('validate/{id}', [KurikulumPages::class, 'validateSiswa'])->name('daftar-siswa.validate');
    });
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/status', [HomeController::class, 'status'])->name('status')->middleware('auth');
Route::post('/loginProcess', [LoginController::class, 'loginProcess'])->middleware('guest');
Route::get('/login', [LoginController::class, 'loginPage'])->name('login')->middleware('guest');
Route::get('/register', [LoginController::class, 'registerPage'])->name('register')->middleware('guest');
Route::post('/registerProcess', [LoginController::class, 'registerProcess'])->name('registerProcess')->middleware('guest');
