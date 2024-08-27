<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\SubMateri;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home()
    {
        $materis = Materi::get();

        $params = [
            "data" => $materis
        ];

        return view('home', $params);
    }

    function submateri($idmateri){
        $materi = Materi::find($idmateri);
        $subs = SubMateri::where('materi_id',$idmateri)->get();

        $params = [
            "materi" => $materi,
            "data" => $subs,
        ];

        return view('materi.submateri', $params);
    }
}
