<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\MateriVideo;
use App\Models\SubMateri;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

    function detailsubmateri($idsubmateri){
        $submateri = SubMateri::find($idsubmateri);
        $video = MateriVideo::where('submateri_id', $idsubmateri)->get();

        $params = [
            "row" => $submateri,
            "video" => $video
        ];

        return view('materi.detail-submateri', $params);
    }

    function status(){
        $user = User::find(Auth::user()->id);
        $params = [
            "data" => $user
        ];
        return view('status', $params);
    }
}
