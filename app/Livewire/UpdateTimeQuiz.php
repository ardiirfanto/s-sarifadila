<?php

namespace App\Livewire;

use App\Models\QuizTime;
use Livewire\Component;
use PDO;

class UpdateTimeQuiz extends Component
{
    public $waktu;

    public function render()
    {
        $qt = QuizTime::first();
        $this->waktu = $qt->time ?? 120;
        return view('livewire.update-time-quiz');
    }

    public function save()
    {
        $waktu = $this->waktu;

        $qt = QuizTime::first();

        if ($qt) {
            $qt->time = $waktu;
            $qt->save();
        } else {
            QuizTime::create([
                'time' => $waktu
            ]);
        }

        session()->flash('success', 'Berhasil disimpan.');

        return redirect('/dashboard/kuis');
    }
}
