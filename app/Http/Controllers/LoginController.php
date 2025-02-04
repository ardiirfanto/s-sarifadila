<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginPage()
    {
        return view('guruPages.login');
    }

    public function loginProcess(Request $request)
    {

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            session()->flash('status', 'Email atau Password Salah!');
            return redirect()->back();
        }

        if ($user->is_valid == 0) {
            session()->flash('status', 'Akun belum diaktifkan.Mohon hubungi Admin Kurikulum!');
            return redirect()->back();
        }

        $login = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'role' => $user->role
        ]);

        if (!$login) {
            session()->flash('status', 'Email atau Password Salah!');
            return redirect()->back();
        }

        $request->session()->regenerate();
        if ($user->role == 'kurikulum') {
            return redirect()->route('dashboard');
        } else if ($user->role == 'guru') {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('home');
        }

        // if () {
        //     // $request->session()->regenerate();
        //     return redirect()->intended('dashboard');

        // } else if (Auth::attempt([
        //     'email' => $request->email,
        //     'password' => $request->password,
        //     'role' => 'siswa'
        // ])) {
        //     // $request->session()->regenerate();
        //     return redirect()->intended('home');

        // } else {
        //     session()->flash('status', 'Email atau Password Salah!');
        //     return redirect()->back();
        // }
    }

    public function registerPage()
    {
        return view('guruPages.register');
    }

    public function registerProcess(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required|min:6',
            'nisn' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            session()->flash('status', 'Email Sudah Terdaftar!');
            return redirect()->back();
        }

        $post = [
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'nisn' => $request->nisn,
            'role' => 'siswa',
        ];

        $user = User::create($post);
        session()->flash('status', 'Berhasil mendaftar. Mohon tunggu divalidasi oleh Kurikulum!');
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
