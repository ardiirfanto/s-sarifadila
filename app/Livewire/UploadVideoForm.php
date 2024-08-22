<?php

namespace App\Livewire;

use App\Models\MateriVideo;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class UploadVideoForm extends Component
{
    use WithFileUploads;

    public $pilihPelajaran;

    #[Validate]
    public $materi;

    public $fileVideo;

    public function rules()
    {
        return [
            'materi' => 'required|unique:materi_videos,pelajaran',
        ];
    }

    public function render()
    {
        switch($this->pilihPelajaran){
            case 'Pelajaran 1':
                $data = collect([
                    'Jalan Cepat',
                    'Lari Jarak Pendek',
                    'Lompat Jauh',
                ]);
                break;

            case 'Pelajaran 2':
                $data = collect([
                    'Gerak Nonlokomtor',
                    'Gerak Dasar Nonlokomtor',
                    'Permainan Dalam Gerak Nonlokomotor',
                ]);
                break;

            case 'Pelajaran 3':
                $data = collect([
                    'Latihan Dasar Menangkap dan Melempar Bola Basket',
                    'Latihan Dasar Menangkap dan Melempar Bola Kasti',
                    'Latihan Dasar Menangkap dan Melempar Bola Kastis',
                    'Latihan Dasar Menangkap dan Melempar Bola Kastil',
                ]);
                break;

            case 'Pelajaran 4':
                $data = collect([
                    'Gerak Dasar Lokomotor Senam Lantai',
                    'Gerak Dasar Nonlokomotor Senam Lantai',
                    'Gerak Dasar Manipulatif Senam Lantai',

                ]);
                break;

            case 'Pelajaran 5':
                    $data = collect([
                        'Gerak Dasar Lokomotor Senam Lantai1',
                        'Gerak Dasar Nonlokomotor Senam Lantai1',
                        'Gerak Dasar Manipulatif Senam Lantai1',
                    ]);
                    break;

            default:
                $data = [];
        }

        return view('livewire.upload-video-form', compact('data'));
    }

    public function store()
    {
        if($this->materi == 0){
            session()->flash('failed', 'Pilih materi!');
            return redirect()->back();
        }

        $validate = $this->validate([
            'fileVideo' => 'file|max:307200'
        ]);

        if(!$validate){
            return redirect()->back();
        }

        if($this->fileVideo){
            $this->fileVideo->store('materi-video', 'public');

            MateriVideo::create([
                'pelajaran' => $this->materi,
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
