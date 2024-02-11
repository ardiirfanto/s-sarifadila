<?php

namespace App\Livewire;

use App\Models\Code;
use App\Models\Siswa;
use Livewire\Component;
use App\Models\Siswa_Code;
use Illuminate\Support\Facades\Crypt;

class LoginQuizForm extends Component
{
    public $nisn,$nama, $code;

    public function render()
    {
        return view('livewire.login-quiz-form');
    }

    public function checkSiswa($namaSiswa, $code)
    {
        $cariSiswa = Siswa::where('nama', 'LIKE', '%'. $namaSiswa .'%')->get();
        $cariCode = Code::where('code', 'LIKE', '%'. $code .'%')->get();

        foreach ($cariSiswa as $item){
            foreach($cariCode as $row){
                $trackingCode = Siswa_Code::where('id_siswa', $item->id)
                                            ->where('id_code', $row->id)->exists();
    
                if($trackingCode){
                    return $trackingCode;
                }
            }
        }
    }

    public function submit()
    {
        if($this->checkSiswa($this->nama, $this->code)){
            session()->flash('status', 'Anda sudah login quiz ini.');
            return redirect()->back();
        }

        session()->put('nisn', $this->nisn);
        $link = Crypt::encryptString($this->code);
        return $this->redirect('/kuis/'.$link, navigate: false);
    }
}
