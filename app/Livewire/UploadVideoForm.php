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
                    'sepak bola',
                    'bola basket',
                    'bola tangan',
                ]);
                break;

            case 'Pelajaran 2':
                $data = collect([
                    'bola voli',
                    'bulu tangkis',
                    'tenis meja',
                ]);
                break;

            case 'Pelajaran 3':
                $data = collect([
                    'hakikat atletik',
                    'lari jarak pendek',
                    'lari jarak menengah',
                    'lompat jauh',
                ]);
                break;

            case 'Pelajaran 4':
                $data = collect([
                    'hakikat pencak silat',
                    'keterampilan gerak pencak silat ',
                    'keterampilan gerak belaan',
                ]);
                break;

            case 'Pelajaran 5':
                    $data = collect([
                        'hakikat kebugaran jasmani',
                        'latihan kebugaran jasmani',
                        'tes dan pengkuran ',
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
