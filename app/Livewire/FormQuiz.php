<?php

namespace App\Livewire;

use App\Models\QuizTime;
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
        $qt = QuizTime::first();
        $timer = $qt->time;

        $temp_waktu = ($timer * 60) - 0; //dijadikan detik dan dikurangi waktu yang berlalu
        $temp_menit = ($temp_waktu / 60);                //dijadikan menit lagi
        $temp_detik = $temp_waktu % 60;                       //sisa bagi untuk detik

        if ($temp_menit < 60) {
            /* Apabila $temp_menit yang kurang dari 60 menit */
            $jam    = 0;
            $menit  = $temp_menit;
            $detik  = $temp_detik;
        } else {
            /* Apabila $temp_menit lebih dari 60 menit */
            $jam    = ($temp_menit / 60);    //$temp_menit dijadikan jam dengan dibagi 60 dan dibulatkan menjadi integer
            $menit  = $temp_menit % 60;           //$temp_menit diambil sisa bagi ($temp_menit%60) untuk menjadi menit
            $detik  = $temp_detik;
        }

        $time = [
            'jam' => $jam,
            'menit' => $menit,
            'detik' => $detik,
        ];

        return view('livewire.form-quiz', [
            'data' => $this->data,
            'time' => $time
        ]);
    }
}
