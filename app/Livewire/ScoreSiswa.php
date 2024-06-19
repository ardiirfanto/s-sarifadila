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
        switch($this->urutkan){
            case '1':
                $data = Score::where('nisn', $userNisn)->orderBy('nilai', 'DESC')->paginate(10);
                break;
            case '2':
                $data = Score::where('nisn', $userNisn)->orderBy('nilai', 'ASC')->paginate(10);
                break;
            case '3':
                $data = Score::where('nisn', $userNisn)->orderBy('created_at', 'DESC')->paginate(10);
                break;
            case '4':
                $data = Score::where('nisn', $userNisn)->orderBy('created_at', 'ASC')->paginate(10);
                break;
            default:
                $data = Score::where('nisn', $userNisn)->latest()->paginate(10);
        }
        return view('livewire.score-siswa', compact('data'));
    }
}
