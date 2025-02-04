<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\User;
use App\Services\FileServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KurikulumPages extends Controller
{
    function index()
    {
        $mapel = Mapel::all();
        $guru = User::where('role', 'guru')->get();
        $siswa = User::where('role', 'siswa')->get();

        $params = [
            "mapel" => $mapel,
            "guru" => $guru,
            "siswa" => $siswa
        ];
        return view('kurikulumPages.index', $params);
    }

    // Siswa
    public function daftarSiswa()
    {
        $siswa = User::where('role', 'siswa')->get();
        $params = [
            "siswa" => $siswa
        ];
        return view('kurikulumPages.siswa.daftar', $params);
    }

    public function validateSiswa($id)
    {
        $siswa = User::find($id);
        $siswa->is_valid = $siswa->is_valid == 0 ? 1 : 0;
        $siswa->save();
        session()->flash('status', 'Berhasil mengubah status siswa');
        return redirect()->route('daftar-siswa');
    }

    // Guru
    public function daftarGuru()
    {
        $guru = User::where('role', 'guru')->get();
        $params = [
            "guru" => $guru
        ];
        return view('kurikulumPages.guru.daftar', $params);
    }

    public function addGuru()
    {
        $params = [
            "guru" => null,
            "title" => "Tambah Data Guru",
            "action" => route('daftar-guru.store')
        ];
        return view('kurikulumPages.guru.form', $params);
    }

    public function storeGuru(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required|min:6',
        ]);

        $post = [
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'guru',
            'is_valid' => '1'
        ];

        $store = User::create($post);
        if (!$store) {
            session()->flash('status', 'Data Guru gagal disimpan');
            return redirect()->back();
        }
        session()->flash('status', 'Berhasil menambah data Guru');
        return redirect()->route('daftar-guru');
    }

    public function editGuru($id)
    {
        $guru = User::find($id);
        $params = [
            "guru" => $guru,
            "title" => "Edit Data Guru",
            "action" => route('daftar-guru.update')
        ];
        return view('kurikulumPages.guru.form', $params);
    }

    public function updateGuru(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
        ]);

        $guru = User::find($request->id);
        $guru->name = $request->name;
        $guru->email = $request->email;
        $guru->username = $request->username;
        if (isset($request->password)) {
            $guru->password = Hash::make($request->password);
        }
        $guru->save();
        session()->flash('status', 'Berhasil mengubah data Guru');
        return redirect()->route('daftar-guru');
    }

    public function deleteGuru($id)
    {
        $guru = User::find($id);
        $guru->delete();
        session()->flash('status', 'Berhasil menghapus data Guru');
        return redirect()->route('login');
    }

    // Mapel
    public function daftarMapel()
    {
        $mapel = Mapel::join('users', 'users.id', 'mapels.user_id')
            ->get(['mapels.*', 'users.name']);
        $params = [
            "mapel" => $mapel
        ];
        return view('kurikulumPages.mapel.daftar', $params);
    }
    public function addMapel()
    {
        $guru = User::where('role', 'guru')->get();
        $params = [
            "guru" => $guru,
            "mapel" => null,
            "title" => "Tambah Data Mapel",
            "action" => route('daftar-mapel.store')
        ];
        return view('kurikulumPages.mapel.form', $params);
    }

    public function storeMapel(Request $request)
    {
        $request->validate([
            'guru' => 'required',
            'mapel' => 'required',
            'icon' => 'required',
            'video' => 'required',
        ]);

        $icon = FileServices::storeiconmapel($request->icon);

        $post = [
            'user_id' => $request->guru,
            'mapel' => $request->mapel,
            'icon' => $icon,
            'video' => $request->video,
        ];

        $store = Mapel::create($post);
        if (!$store) {
            session()->flash('status', 'Data Mapel gagal disimpan');
            return redirect()->back();
        }
        session()->flash('status', 'Berhasil menambah data Mapel');
        return redirect()->route('daftar-mapel');
    }

    public function editMapel($id)
    {
        $mapel = Mapel::find($id);
        $guru = User::where('role', 'guru')->get();
        $params = [
            "guru" => $guru,
            "mapel" => $mapel,
            "title" => "Edit Data Mapel",
            "action" => route('daftar-mapel.update')
        ];
        return view('kurikulumPages.mapel.form', $params);
    }

    public function updateMapel(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'mapel' => 'required',
            'video' => 'required',
        ]);

        $mapel = Mapel::find($request->id);
        if(isset($request->icon)){
            FileServices::deleteiconmapel($mapel->icon);
            $icon = FileServices::storeiconmapel($request->icon);
            $mapel->icon = $icon;
        }

        $mapel->mapel = $request->mapel;
        $mapel->video = $request->video;
        $mapel->save();
        session()->flash('status', 'Berhasil mengubah data Mapel');
        return redirect()->route('daftar-mapel');
    }

    public function deleteMapel($id)
    {
        $mapel = Mapel::find($id);
        $mapel->delete();
        session()->flash('status', 'Berhasil menghapus data Mapel');
        return redirect()->route('daftar-mapel');
    }
}
