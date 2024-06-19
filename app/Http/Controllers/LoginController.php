<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginPage()
    {
        return view('guruPages.login');
    }

    public function loginProcess(Request $request)
    {

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'guru'
        ])) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
            
        } else if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'siswa'
        ])) {
            $request->session()->regenerate();
            return redirect()->intended('home');

        } else {
            session()->flash('status', 'Email atau Password Salah!');
            return redirect()->back();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
