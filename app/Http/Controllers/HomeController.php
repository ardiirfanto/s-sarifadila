<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
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
        $mapels = Mapel::join('users','mapels.user_id','users.id')->get(['mapels.*','users.name']);

        $params = [
            "data" => $mapels
        ];

        return view('home', $params);
    }

    function materi($mapelid){
        $mapel = Mapel::find($mapelid);
        $materis = Materi::where('mapel_id',$mapelid)->get();

        $params = [
            "mapel" => $mapel,
            "data" => $materis
        ];

        return view('materi', $params);
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
