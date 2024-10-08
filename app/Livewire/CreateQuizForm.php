<?php

namespace App\Livewire;

use App\Models\Code;
use App\Models\Materi;
use App\Models\Quiz;
use Livewire\Component;
use Illuminate\Support\Str;

class CreateQuizForm extends Component
{
    public $pelajaran = 1, $code;

    public function render()
    {
        $materi = Materi::get();
        return view('livewire.create-quiz-form',compact('materi'));
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
            $this->pelajaran = 1;
            $this->code = "";

            session()->flash('failed', 'Code sudah ada.');

            return redirect()->back();
        }

        Quiz::create([
            'materi_id' => $this->pelajaran
        ]);

        $idQuiz = Quiz::latest()->first()->id;


        Code::create([
            'code' => $this->code,
            'quiz_id' => $idQuiz
        ]);

        $this->pelajaran = 1;
        $this->code = "";

        session()->flash('success', 'Berhasil disimpan.');

        return redirect('/dashboard/kuis');
    }
}
