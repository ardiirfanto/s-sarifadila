<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        $user = User::where('email',$request->email)->first();

        if(!$user){
            session()->flash('status', 'Email atau Password Salah!');
            return redirect()->back();
        }

        $login = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'role' => $user->role
        ]);

        if(!$login){
            session()->flash('status', 'Email atau Password Salah!');
            return redirect()->back();
        }

        $request->session()->regenerate();
        if($user->role == 'guru'){
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

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
