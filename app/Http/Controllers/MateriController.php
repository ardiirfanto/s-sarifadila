<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Services\FileServices;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    function store(Request $req){

        $gambar = FileServices::storegambarmateri($req->gambar);

        $post = [
            'judul' => $req->judul,
            'mapel_id' => $req->mapel_id,
            'gambar' => $gambar,
            'bab' => $req->bab,
        ];

        $store = Materi::create($post);

        if(!$store){
            session()->flash('status', 'Materi Gagal tersimpan!');
            return redirect()->back();
        }

        session()->flash('status', 'Materi Berhasil tersimpan!');
        return redirect()->route('kelolamateri', ['idmapel' => $post['mapel_id']]);

    }

    function delete($id){
        $row = Materi::find($id);
        if ($row->gambar != null) {
            FileServices::deletegambarmateri($row->gambar);
        }

        if ($row->delete()) {
            session()->flash('status', 'Materi Berhasil dihapus!');
            return redirect()->back();
        }else {
            session()->flash('status', 'Materi Gagal dihapus!');
            return redirect()->back();
        }
    }
}
