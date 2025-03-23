<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Materi;
use App\Models\Quiz;
use App\Models\SubMateri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruPages extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data = Mapel::where('user_id', $user->id)->get();

        $params = [
            "data" => $data
        ];

        return view('guruPages.dash', $params);
    }

    public function materiPage($idmapel)
    {
        $data = Materi::where('mapel_id', $idmapel)->get();
        $mapel = Mapel::where('id', $idmapel)->first();
        $params = [
            "mapel" => $mapel,
            "data" => $data
        ];
        return view('guruPages.materi', $params);
    }

    public function kuisPage($idmapel)
    {
        return view('guruPages.quiz',['mapelId' => $idmapel]);
    }

    public function hasilKuis($idmapel)
    {
        return view('guruPages.detailHasilKuis',['mapelId' => $idmapel]);
    }

    public function detailQuiz($id)
    {
        $data = Quiz::join('materis', 'materis.id', 'quizzes.materi_id')
            ->where('quizzes.id', $id)
            ->first(['quizzes.*', 'materis.bab', 'materis.judul']);
        return view('guruPages.quizDetail', compact('data'));
    }

    public function daftarSiswa()
    {
        return view('guruPages.daftar-siswa');
    }

    public function videomateri($id)
    {
        return view('guruPages.videomateri',['mapelId' => $id]);
    }

    public function kelolamateri($idmapel)
    {
        $mapel = Mapel::find($idmapel);
        $materi = Materi::where('mapel_id', $idmapel)->get();
        $params = [
            "mapel" => $mapel,
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
    public function tambahmateri($idmapel)
    {
        $mapel = Mapel::find($idmapel);
        $params = [
            "mapel" => $mapel,
        ];
        return view('guruPages.materi.form', $params);
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
