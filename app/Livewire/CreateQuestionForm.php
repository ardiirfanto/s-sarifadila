<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Question;
use Livewire\WithFileUploads;

class CreateQuestionForm extends Component
{
    use WithFileUploads;

    public $id, $soal, $gambar;

    public function mounted($id)
    {
        $this->id = $id;
    }

    public function render()
    {
        return view('livewire.create-question-form');
    }

    public function submit()
    {
        if($this->gambar){
            $this->validate([
                'gambar' => 'image|mimes:png,jpg,jpeg|max:10240'
            ]);

            $this->gambar->store('soal/gambar', 'public');

            Question::create([
                'quiz_id' => $this->id,
                'pertanyaan' => $this->soal,
                'gambar' => $this->gambar->hashName(),
            ]);

            return redirect('/dashboard/detail-kuis/'. $this->id);

        } else {
            Question::create([
                'quiz_id' => $this->id,
                'pertanyaan' => $this->soal
            ]);

            return redirect('/dashboard/detail-kuis/'. $this->id);
        }
    }
}
