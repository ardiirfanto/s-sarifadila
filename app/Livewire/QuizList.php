<?php

namespace App\Livewire;

use App\Models\Code;
use App\Models\Quiz;
use App\Models\Option;
use Livewire\Component;
use App\Models\Question;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

class QuizList extends Component
{
    use WithPagination;

    public $id, $sorting;

    public function render()
    {
        if($this->sorting != 0){
            $data = Quiz::with('code')->where('pelajaran', 'LIKE', '%'.$this->sorting .'%')->latest()->paginate(10);
        } else {
            $data = Quiz::with('code')->latest()->paginate(10);
        }
        
        return view('livewire.quiz-list', compact('data'));
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

        foreach($find as $item){
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
