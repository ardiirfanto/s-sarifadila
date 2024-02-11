<?php

namespace App\Livewire;

use App\Models\MateriVideo;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadVideoForm extends Component
{
    use WithFileUploads;

    public $pilihPelajaran = "Pelajaran 1";
    public $pilihMapel = "Jalan Cepat";

    public $fileVideo;

    protected $pelajaran1= ["Jalan Cepat", "Lari Jarak Pendek (Sprint)", "Lompat Jauh"];
    protected $pelajaran2= ["Gerak Dasar Nonlokomtor", "Gerak Nonlokomtor", "Permainan Dalam Gerak Nonlokomotor"];
    protected $pelajaran3= ["Latihan Dasar Menangkap dan Melempar Bola Basket", "Gerak Dasar Menangkap dan Melempar Bola Kasti"];
    protected $pelajaran4= ["Gerak Dasar Lokomotor Senam Lantai", "Gerak Dasar Nonlokomotor Senam Lantai", "Gerak Dasar Manipulatif Senam Lantai"];

    public function render()
    {
        switch($this->pilihPelajaran){
            case "Pelajaran 1":
                $optionMeteri = $this->pelajaran1;
                break;
            case "Pelajaran 2":
                $optionMeteri = $this->pelajaran2;
                break;
            case "Pelajaran 3":
                $optionMeteri = $this->pelajaran3;
                break;
            case "Pelajaran 4":
                $optionMeteri = $this->pelajaran4;
                break;
            default:
                $optionMeteri = $this->pelajaran1;
        }

        return view('livewire.upload-video-form', compact('optionMeteri'));
    }

    public function store()
    {
        $validate = $this->validate([
            'fileVideo' => 'file|max:307200'
        ]);

        if(!$validate){
            return redirect()->back();
        }

        if($this->fileVideo){
            $this->fileVideo->store('materi-video', 'public');
    
            MateriVideo::create([
                'pelajaran' => $this->pilihPelajaran,
                'nama_materi' => $this->pilihMapel,
                'video' => $this->fileVideo->hashName()
            ]);

            session()->flash('status', 'Video tersimpan!');
    
            return redirect()->to('/dashboard');

        } else {
            session()->flash('status', 'Video gagal tersimpan!');
    
            return redirect()->to('/dashboard');
        }


    }
}
