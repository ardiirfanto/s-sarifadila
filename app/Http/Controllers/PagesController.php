<?php

namespace App\Http\Controllers;

use App\Models\Code;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PagesController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function kuisPage($code)
    {
        $nisn = session()->get('nisn');
        // Decrypt code
        $decrypted = Crypt::decryptString($code);
        // Cari ID code dg berdasarkan kode
        $getCodeId = Code::where('code', $decrypted)->first()->id;
        // Cari quiz yang berkaitan dengan kode tersebut
        $getQuiz = Code::find($getCodeId)->quiz;
        // Dapatkan ID Quiz
        $getQuizId = $getQuiz->id;

        // Tampilkan pertanyaan dan pilgan berdasarkan relasi dari ID Quiz diatas
        $getQuestion = Question::with('options')->where('quiz_id', $getQuizId)->get();

        return view('quiz', compact('getQuestion', 'nisn'));
    }

    // PELAJARAN 1
    public function pelajaran1()
    {
        return view('materi.pelajaran1.pelajaran1');
    }

    public function jalanCepat()
    {
        return view('materi.pelajaran1.jalanCepat');
    }

    public function lariJarakPendek()
    {
        return view('materi.pelajaran1.lariJarakPendek');
    }

    public function lompatJauh()
    {
        return view('materi.pelajaran1.lompatJauh');
    }
    // 


    // PELAJARAN 2
    public function pelajaran2()
    {
        return view('materi.pelajaran2.pelajaran2');
    }

    public function gerakNonlokomotor()
    {
        return view('materi.pelajaran2.gerakNonlokomotor');
    }

    public function gerakDasarNonlokomotor()
    {
        return view('materi.pelajaran2.gerakDasarNonlokomotor');
    }

    public function permainanGerakNonlokomotor()
    {
        return view('materi.pelajaran2.permainanGerakNonlokomotor');
    }
    // 

    // PELAJARAN 3
    public function pelajaran3()
    {
        return view('materi.pelajaran3.pelajaran3');
    }
    
    public function dasarTangkapLemparBasket()
    {
        return view('materi.pelajaran3.dasarTangkapLemparBasket');
    }

    public function dasarTangkapLemparKasti()
    {
        return view('materi.pelajaran3.dasarTangkapLemparKasti');
    }
    // 

    // PELAJARAN 4
    public function pelajaran4()
    {
        return view('materi.pelajaran4.pelajaran4');
    }
    
    public function senamLantai()
    {
        return view('materi.pelajaran4.senamLantaiLokomotor');
    }

    public function senamLantaiNonlokomotor()
    {
        return view('materi.pelajaran4.senamLantaiNonlokomotor');
    }

    public function manipulatifSenamLantai()
    {
        return view('materi.pelajaran4.manipulatifSenamLantai');
    }

    // Login Quiz
    public function loginQuiz()
    {
        return view('layouts.login-quiz');
    }
}
