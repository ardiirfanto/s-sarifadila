<?php

use App\Http\Controllers\AnswerHandleController;
use App\Http\Controllers\GuruPages;
use App\Http\Controllers\PagesController;
use App\Livewire\PelajaranPages\Pelajaran1;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/kuis/{code}', [PagesController::class, 'kuisPage'])->name('kuisPage');
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
});

Route::prefix('pelajaran-4')->group(function () {
    Route::get('/', [PagesController::class, 'pelajaran4'])->name('pelajaran4');
    Route::get('/senam-lantai-lokomotor', [PagesController::class, 'senamLantai'])->name('senamLantai');
    Route::get('/senam-lantai-nonlokomotor', [PagesController::class, 'senamLantaiNonlokomotor'])->name('senamLantaiNonlokomotor');
    Route::get('/manipulatif-senam-lantai', [PagesController::class, 'manipulatifSenamLantai'])->name('manipulatifSenamLantai');
});

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [GuruPages::class, 'index'])->name('dashboard');
        Route::get('/kuis', [GuruPages::class, 'kuisPage'])->name('kuisPageGuru');
        Route::get('/detail-kuis/{id}', [GuruPages::class, 'detailQuiz'])->name('detailQuiz');
    });

    Route::get('/logout', [GuruPages::class, 'logout']);
});

Route::get('/login', [GuruPages::class, 'loginPage'])->name('login')->middleware('guest');