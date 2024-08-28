<?php

namespace App\Http\Controllers;

use App\Models\SubMateri;
use App\Services\FileServices;
use Illuminate\Http\Request;

class SubMateriController extends Controller
{
    function store(Request $req)
    {

        $gambar = FileServices::storegambarsubmateri($req->gambar);

        $post = [
            'materi_id' => $req->materi_id,
            'judul' => $req->judul,
            'gambar' => $gambar,
            'content' => $req->content,
        ];

        $store = SubMateri::create($post);

        if (!$store) {
            session()->flash('status', 'Sub Materi Gagal tersimpan!');
            return redirect()->back();
        }

        session()->flash('status', 'Sub Materi Berhasil tersimpan!');
        return redirect()->route('kelolasubmateri', ['materiid' => $req->materi_id]);
    }

    function delete($id)
    {
        $row = SubMateri::find($id);
        if ($row->gambar != null) {
            FileServices::deletegambarsubmateri($row->gambar);
        }

        if ($row->delete()) {
            session()->flash('status', 'Sub Materi Berhasil dihapus!');
            return redirect()->back();
        } else {
            session()->flash('status', 'Sub Materi Gagal dihapus!');
            return redirect()->back();
        }
    }

    function update(Request $req)
    {
        $row = SubMateri::find($req->idsubmateri);

        $row->judul = $req->judul;
        $row->content = $req->content;
        if(isset($req->gambar)){
            if ($row->gambar != null) {
                FileServices::deletegambarsubmateri($row->foto);
            }
            $newgambar = FileServices::storegambarsubmateri($req->gambar);
            $row->gambar = $newgambar;
        }

        $update = $row->save();

        if (!$update) {
            session()->flash('status', 'Sub Materi Gagal diubah!');
            return redirect()->back();
        }

        session()->flash('status', 'Sub Materi Berhasil diubah!');
        return redirect()->route('kelolasubmateri', ['materiid' => $req->materi_id]);
    }
}
