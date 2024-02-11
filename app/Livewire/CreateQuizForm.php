<?php

namespace App\Livewire;

use App\Models\Code;
use App\Models\Quiz;
use Livewire\Component;
use Illuminate\Support\Str;

class CreateQuizForm extends Component
{
    public $pelajaran = "Pelajaran 1", $code;

    public function render()
    {
        return view('livewire.create-quiz-form');
    }

    public function generateCode()
    {
        $this->code = Str::random(6);
    }

    public function checkCode($code)
    {
        return Code::where('code', 'LIKE', '%'. $code . '%')->exists();
    }

    public function submit()
    {
        if($this->checkCode($this->code)){
            $this->pelajaran = "Pelajaran 1";
            $this->code = "";

            session()->flash('failed', 'Code sudah ada.');

            return redirect()->back();
        }
        
        Quiz::create([
            'pelajaran' => $this->pelajaran
        ]);

        $idQuiz = Quiz::latest()->first()->id;


        Code::create([
            'code' => $this->code,
            'quiz_id' => $idQuiz
        ]);

        $this->pelajaran = "Pelajaran 1";
        $this->code = "";

        session()->flash('success', 'Berhasil disimpan.');

        return redirect()->back();
    }
}
