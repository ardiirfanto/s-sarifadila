<?php

namespace App\Livewire;

use Livewire\WithPagination;
use App\Models\Score;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ScoreSiswa extends Component
{
    use WithPagination;

    public $urutkan;

    public function render()
    {
        $userNisn = Auth::user()->nisn;
        $query = Score::join('codes', 'codes.code', 'scores.code')
            ->join('quizzes', 'codes.quiz_id', 'quizzes.id')
            ->join('materis', 'materis.id', 'quizzes.materi_id')
            ->where('nisn', $userNisn);
        $select = [
            "scores.nilai",
            "scores.created_at",
            "scores.id",
            "scores.nama",
            "scores.nisn",
            "materis.bab",
            "materis.judul"
        ];
        switch ($this->urutkan) {
            case '1':
                $data = $query->orderBy('scores.nilai', 'DESC')->paginate(10, $select);
                break;
            case '2':
                $data = $query->orderBy('scores.nilai', 'ASC')->paginate(10, $select);
                break;
            case '3':
                $data = $query->orderBy('scores.created_at', 'DESC')->paginate(10, $select);
                break;
            case '4':
                $data = $query->orderBy('scores.created_at', 'ASC')->paginate(10, $select);
                break;
            default:
                $data = $query->orderBy('scores.created_at', 'DESC')->paginate(10, $select);
        }

        return view('livewire.score-siswa', compact('data'));
    }
}
