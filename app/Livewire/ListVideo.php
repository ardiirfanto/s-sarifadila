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

    public function render()
    {
        $data = MateriVideo::latest()->paginate(4);
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
