<?php

namespace App\Http\Controllers;

use App\Models\MateriVideo;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruPages extends Controller
{
    public function index()
    {
        $data = MateriVideo::latest()->get();
        return view('guruPages.dashboard', compact('data'));
    }

    public function kuisPage()
    {
        return view('guruPages.quiz');
    }

    public function detailQuiz($id)
    {
        $data = Quiz::find($id);
        return view('guruPages.quizDetail', compact('data'));
    }

    public function loginPage()
    {
        return view('guruPages.login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
