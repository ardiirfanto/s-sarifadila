<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Quiz;
use App\Models\SubMateri;
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
        $data = Quiz::join('materis', 'materis.id', 'quizzes.materi_id')
            ->where('quizzes.id', $id)
            ->first(['quizzes.*','materis.bab','materis.judul']);
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

    public function kelolamateri()
    {
        $materi = Materi::get();
        $params = [
            "materi" => $materi
        ];
        return view('guruPages.materi.view', $params);
    }
    public function kelolasubmateri($materi_id)
    {
        $materi = Materi::find($materi_id);
        $submateri = SubMateri::where('materi_id', $materi_id)->get();
        $params = [
            "materi" => $materi,
            "submateri" => $submateri,
        ];
        return view('guruPages.submateri.view', $params);
    }
    public function tambahmateri()
    {
        return view('guruPages.materi.form');
    }
    public function tambahsubmateri($materiid)
    {
        $materi = Materi::find($materiid);
        $params = [
            "materi" => $materi,
            "row" => null,
        ];
        return view('guruPages.submateri.form', $params);
    }
    public function ubahsubmateri($submateriid)
    {
        $submateri = SubMateri::find($submateriid);
        $materi = Materi::find($submateri->materi_id);
        $params = [
            "materi" => $materi,
            "row" => $submateri,
        ];
        return view('guruPages.submateri.form', $params);
    }
}
