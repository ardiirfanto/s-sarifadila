<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruPages extends Controller
{
    public function index()
    {
        return view('guruPages.dash');
    }

    public function kuisPage()
    {
        return view('guruPages.quiz');
    }

    public function hasilKuis()
    {
        return view('guruPages.detailHasilKuis');
    }

    public function detailQuiz($id)
    {
        $data = Quiz::find($id);
        return view('guruPages.quizDetail', compact('data'));
    }

    public function daftarSiswa()
    {
        return view('guruPages.daftar-siswa');
    }

    public function videomateri()
    {
        return view('guruPages.videomateri');
    }
}
