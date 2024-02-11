<?php

namespace App\Livewire;

use Livewire\Component;

class FormQuiz extends Component
{
    public $data, $jawaban = [];

    public function mounted($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.form-quiz', [
            'data' => $this->data
        ]);
    }
}
