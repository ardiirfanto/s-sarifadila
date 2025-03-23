<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MateriVideo;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

class ListVideo extends Component
{
    use WithPagination;

    public $id;

    public $mapelId;

    public function mount($mapelId){
        $this->mapelId = $mapelId;
    }

    public function render()
    {
        $data = MateriVideo::join('sub_materis', 'materi_videos.submateri_id', '=', 'sub_materis.id')
            ->join('materis','materis.id','=','sub_materis.materi_id')
            ->where('materis.mapel_id', $this->mapelId)
            ->paginate(4);
        return view('livewire.list-video', compact('data'));
    }

    public function hapus($id)
    {
        $this->id = $id;
    }

    public function hapusConfirm()
    {
        $find = MateriVideo::find($this->id);

        $berkas_path = ('public/materi-video/' . basename($find->video));
        Storage::delete($berkas_path);

        $find->delete();

        session()->flash('status', 'Materi video dihapus!');

        return redirect('/dashboard');
    }
}
