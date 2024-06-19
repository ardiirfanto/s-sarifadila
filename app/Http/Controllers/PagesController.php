<?php

namespace App\Http\Controllers;

use App\Models\Code;
use App\Models\Answer;
use App\Models\Question;
use App\Models\MateriVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function index()
    {
        return view('login');
    }
    function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'passwword' => 'required'

        ], [
            'email.required' => 'Email wjib diisi',
            'password.required' => 'password wjib diisi'

        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($infologin)){
            //jika otentifikasi berhasil
            return redirect('home')->withErrors('username dan password yang dimasukkan valid');
        }else {
            //jika gagal
            return redirect('login')->withErrors('username dan password yang dimasukkan tidak valid');

        }
            
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

        $trackingCode = Answer::where('siswa_code_id', 'LIKE', '%'. $nisn .'%')
                                ->where('code', 'LIKE', '%'. $code .'%')->exists();

        if($trackingCode){
            return redirect('/');
        }

        return view('quiz', compact('getQuestion', 'nisn'));
    }

    public function hasilPage($nilai)
    {
        return view('hasil', compact('nilai'));
    }

    // PELAJARAN 1
    public function pelajaran1()
    {
        return view('materi.pelajaran1.pelajaran1');
    }

    public function jalanCepat()
    {
        $data = MateriVideo::where('pelajaran', 'LIKE', '%jalan cepat%')->get();
        return view('materi.pelajaran1.jalanCepat', compact('data'));
    }

    public function lariJarakPendek()
    {
        $data = MateriVideo::where('pelajaran', 'LIKE', '%lari jarak pendek%')->get();
        return view('materi.pelajaran1.lariJarakPendek', compact('data'));
    }

    public function lompatJauh()
    {
        $data = MateriVideo::where('pelajaran', 'LIKE', '%lompat jauh%')->get();
        return view('materi.pelajaran1.lompatJauh', compact('data'));
    }
    // 


    // PELAJARAN 2
    public function pelajaran2()
    {
        return view('materi.pelajaran2.pelajaran2');
    }

    public function gerakNonlokomotor()
    {
        $data = MateriVideo::where('pelajaran', 'LIKE', '%gerak nonlokomotor%')->get();
        return view('materi.pelajaran2.gerakNonlokomotor', compact('data'));
    }

    public function gerakDasarNonlokomotor()
    {
        $data = MateriVideo::where('pelajaran', 'LIKE', '%gerak dasar nonlokomotor%')->get();
        return view('materi.pelajaran2.gerakDasarNonlokomotor', compact('data'));
    }

    public function permainanGerakNonlokomotor()
    {
        $data = MateriVideo::where('pelajaran', 'LIKE', '%permainan dalam gerak nonlokomotor%')->get();
        return view('materi.pelajaran2.permainanGerakNonlokomotor', compact('data'));
    }
    // 

    // PELAJARAN 3
    public function pelajaran3()
    {
        return view('materi.pelajaran3.pelajaran3');
    }
    
    public function dasarTangkapLemparBasket()
    {
        $data = MateriVideo::where('pelajaran', 'LIKE', '%latihan dasar menangkap dan melempar bola basket%')->get();
        return view('materi.pelajaran3.dasarTangkapLemparBasket', compact('data'));
    }

    public function dasarTangkapLemparKasti()
    {
        $data = MateriVideo::where('pelajaran', 'LIKE', '%latihan dasar menangkap dan melempar bola kasti%')->get();
        return view('materi.pelajaran3.dasarTangkapLemparKasti', compact('data'));
    }

    public function dasarTangkapLemparKastis()
    {
        $data = MateriVideo::where('pelajaran', 'LIKE', '%latihan dasar menangkap dan melempar bola kastis%')->get();
        return view('materi.pelajaran3.dasarTangkapLemparKastis', compact('data'));
    }

    public function dasarTangkapLemparKastil()
    {
        $data = MateriVideo::where('pelajaran', 'LIKE', '%latihan dasar menangkap dan melempar bola kastil%')->get();
        return view('materi.pelajaran3.dasarTangkapLemparKastil', compact('data'));
    }
    // 

    // PELAJARAN 4
    public function pelajaran4()
    {
        return view('materi.pelajaran4.pelajaran4');
    }
    
    public function senamLantai()
    {
        $data = MateriVideo::where('pelajaran', 'LIKE', '%gerak dasar lokomotor senam lantai%')->get();
        return view('materi.pelajaran4.senamLantaiLokomotor', compact('data'));
    }

    public function senamLantaiNonlokomotor()
    {
        $data = MateriVideo::where('pelajaran', 'LIKE', '%gerak dasar nonlokomotor senam lantai%')->get();
        return view('materi.pelajaran4.senamLantaiNonlokomotor', compact('data'));
    }

    public function manipulatifSenamLantai()
    {
        $data = MateriVideo::where('pelajaran', 'LIKE', '%gerak dasar manipulatif senam lantai%')->get();
        return view('materi.pelajaran4.manipulatifSenamLantai', compact('data'));
    }

    
    // PELAJARAN 5
    public function pelajaran5()
    {
        return view('materi.pelajaran5.pelajaran5');
    }
    
    public function senamLantai1()
    {
        $data = MateriVideo::where('pelajaran', 'LIKE', '%gerak dasar lokomotor senam lantai1%')->get();
        return view('materi.pelajaran5.senamLantaiLokomotor1', compact('data'));
    }

    public function senamLantaiNonlokomotor1()
    {
        $data = MateriVideo::where('pelajaran', 'LIKE', '%gerak dasar nonlokomotor senam lantai1%')->get();
        return view('materi.pelajaran5.senamLantaiNonlokomotor1', compact('data'));
    }

    public function manipulatifSenamLantai1()
    {
        $data = MateriVideo::where('pelajaran', 'LIKE', '%gerak dasar manipulatif senam lantai1%')->get();
        return view('materi.pelajaran5.manipulatifSenamLantai1', compact('data'));
    }

    // Login Quiz
    public function loginQuiz()
    {
        return view('layouts.login-quiz');
    }


    // PETUNJUK
    public function petunjuk1()
    {
        return view('petunjuk.pelajaran1');
    }

    public function petunjuk2()
    {
        return view('petunjuk.pelajaran2');
    }

    public function petunjuk3()
    {
        return view('petunjuk.pelajaran3');
    }

    public function petunjuk4()
    {
        return view('petunjuk.pelajaran4');
    }
    
    // RANGKUMAN
    public function rangkuman()
    {
        return view('materi.rangkuman');
    }

    // CREDIT
    public function credit()
    {
        return view('credit');
    }
    // HOME
    public function home()
    {
        return view('home');
    }// INFORMASI
    public function informasi()
    {
        return view('informasi');
    }

    public function nilai()
    {
        return view('nilai');
    }
     
}
