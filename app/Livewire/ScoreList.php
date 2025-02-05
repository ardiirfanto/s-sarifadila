<?php

namespace App\Livewire;

use Livewire\WithPagination;
use App\Models\Score;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ScoreList extends Component
{
    use WithPagination;

    public $urutkan, $pencarian;

    public function render()
    {
        $user = Auth::user();
        $query = Score::join('codes', 'codes.code', 'scores.code')
            ->join('quizzes', 'codes.quiz_id', 'quizzes.id')
            ->join('materis', 'materis.id', 'quizzes.materi_id')
            ->join('mapels','mapels.id','materis.mapel_id');
        $select = [
            "scores.nilai",
            "scores.created_at",
            "scores.id",
            "scores.nisn",
            "scores.nama",
            "materis.bab",
            "materis.judul",
            "mapels.mapel"
        ];
        switch ($this->urutkan) {
            case '1':
                $data = $query->orderBy('nilai', 'DESC')->paginate(10, $select);
                break;
            case '2':
                $data = $query->orderBy('nilai', 'ASC')->paginate(10, $select);
                break;
            default:
                $data = $query->orderBy('created_at', 'DESC')->paginate(10, $select);
        }

        if (strlen($this->pencarian) > 2) {
            $data = $query
                ->where('mapels.user_id', $user->id)
                ->where('scores.nama', 'LIKE', '%' . $this->pencarian . '%')
                ->orWhere('scores.nisn', 'LIKE', '%' . $this->pencarian . '%')
                ->orderBy('scores.nilai', 'DESC')
                ->paginate(10, $select);
        }
        $upkkm = 0;
        $downkkm = 0;

        foreach ($data as $value) {
            if($value->nilai > 70){
                $upkkm += 1;
            } else {
                $downkkm += 1;
            }
        }


        return view('livewire.score-list', compact('data','upkkm','downkkm'));
    }
}
