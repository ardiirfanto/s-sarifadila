<?php

namespace App\Livewire;

use App\Models\Code;
use App\Models\Answer;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class LoginQuizForm extends Component
{
    public $code;

    public function render()
    {
        return view('livewire.login-quiz-form');
    }

    public function checkSiswa($nisn, $code)
    {
        $trackingCode = Answer::where('siswa_code_id', 'LIKE', '%'. $nisn .'%')
                                ->where('code', 'LIKE', '%'. $code .'%')->exists();
        return $trackingCode;
    }

    public function checkKuis($code)
    {
        return Code::where('code', 'LIKE', '%'. $code .'%')->exists();
    }

    public function submit()
    {
        $userNisn = Auth::user()->nisn;
        $userName = Auth::user()->name;
        
        if($this->checkSiswa($userNisn, $this->code)){
            session()->flash('status', 'Anda sudah login quiz ini.');
            return redirect()->back();
        }

        if(!$this->checkKuis($this->code)){
            session()->flash('status', 'Kuis tidak tersedia.');
            return redirect()->back();
        }

        session()->put('name', $userName);
        session()->put('nisn', $userNisn);
        session()->put('code', $this->code);
        $link = Crypt::encryptString($this->code);
        return $this->redirect('/kuis/'.$link, navigate: false);
    }
}
