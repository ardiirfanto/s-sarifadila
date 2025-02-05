<?php

namespace App\Livewire;

use App\Models\Code;
use App\Models\Materi;
use App\Models\Quiz;
use App\Models\Option;
use Livewire\Component;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

class QuizList extends Component
{
    use WithPagination;

    public $id, $sorting;

    public function render()
    {
        $user = Auth::user();
        $materi = Materi::join('mapels', 'mapels.id', 'materis.mapel_id')
            ->where('mapels.user_id', $user->id)
            ->get(['materis.*', 'mapels.mapel']);
        if ($this->sorting != 0) {
            $data = Quiz::with('code')
                ->join('materis', 'materis.id', 'quizzes.materi_id')
                ->where('materi_id', 'LIKE', '%' . $this->sorting . '%')
                ->latest('quizzes.id')
                ->paginate(10, ['quizzes.*', 'materis.bab', 'materis.judul']);
        } else {
            $data = Quiz::with('code')
                ->join('materis', 'materis.id', 'quizzes.materi_id')
                ->latest('quizzes.id')
                ->paginate(10, ['quizzes.*', 'materis.bab', 'materis.judul']);
        }

        return view('livewire.quiz-list', compact('data', 'materi'));
    }

    public function hapus($id)
    {
        $this->id = $id;
    }

    public function hapusConfirm()
    {
        $data = Quiz::find($this->id);

        Code::where('quiz_id', $this->id)->delete();
        $find = Question::where('quiz_id', $this->id)->get();

        foreach ($find as $item) {
            $berkas_path = ('public/soal/gambar/' . basename($item->gambar));
            Storage::delete($berkas_path);

            Option::where('question_id', $item->id)->delete();
        }

        Question::where('quiz_id', $this->id)->delete();

        $data->delete();

        session()->flash('status', 'Data terhapus');

        return redirect()->back();
    }
}
