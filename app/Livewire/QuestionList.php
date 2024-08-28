<?php

namespace App\Livewire;

use App\Models\Option;
use Livewire\Component;
use App\Models\Question;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class QuestionList extends Component
{
    use WithFileUploads;

    public $id, $soalId, $find, $soal, $gambar, $option, $nilai = 0;

    public function mounted($id)
    {
        $this->id = $id;
    }

    public function render()
    {
        $data = Question::with('options')->where('quiz_id', $this->id)->get();

        return view('livewire.question-list', compact('data'));
    }

    public function tambahOption($id)
    {
        $this->soalId = $id;
    }

    public function submit()
    {
        $this->validate([
            'option' => 'required'
        ]);

        Option::create([
            'question_id' => $this->soalId,
            'option' => $this->option,
            'nilai' => $this->nilai
        ]);

        return redirect('/dashboard/detail-kuis/'. $this->id);
    }

    public function editSoal($id)
    {
        $this->soalId = $id;

        $find = Question::find($this->soalId);

        $this->soal = $find->pertanyaan;
    }

    public function submitSoal()
    {
        $find = Question::find($this->soalId);

        if($this->gambar){
            $this->validate([
                'gambar' => 'image|mimes:png,jpg,jpeg|max:10240'
            ]);

            $berkas_path = ('public/soal/gambar/' . basename($find->gambar));
            Storage::delete($berkas_path);

            $this->gambar->store('soal/gambar', 'public');

            $find->update([
                'pertanyaan' => $this->soal,
                'gambar' => $this->gambar->hashName(),
            ]);

            return redirect('/dashboard/detail-kuis/'. $this->id);
        } else {
            $find->update([
                'pertanyaan' => $this->soal
            ]);

            return redirect('/dashboard/detail-kuis/'. $this->id);
        }
    }

    public function hapus($id)
    {
        $this->soalId = $id;
    }

    public function hapusConfirm()
    {
        $data = Question::find($this->soalId);

        $berkas_path = ('public/soal/gambar/' . basename($data->gambar));
        Storage::delete($berkas_path);

        Option::where('question_id', $this->soalId)->delete();
        $data->delete();
    }
}
