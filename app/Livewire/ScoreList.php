<?php

namespace App\Livewire;

use Livewire\WithPagination;
use App\Models\Score;
use Livewire\Component;

class ScoreList extends Component
{
    use WithPagination;

    public $urutkan, $pencarian;

    public function render()
    {
        switch($this->urutkan){
            case '1':
                $data = Score::orderBy('nilai', 'DESC')->paginate(10);
                break;
            case '2':
                $data = Score::orderBy('nilai', 'ASC')->paginate(10);
                break;
            default:
                $data = Score::latest()->paginate(10);
        }

        if(strlen($this->pencarian) > 2){
            $data = Score::where('nama', 'LIKE', '%'. $this->pencarian .'%')
                            ->orWhere('nisn', 'LIKE', '%'. $this->pencarian .'%')->latest()->paginate(10);
        }
        
        return view('livewire.score-list', compact('data'));
    }
}
