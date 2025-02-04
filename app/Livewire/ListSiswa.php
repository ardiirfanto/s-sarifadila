<?php

namespace App\Livewire;

use App\Models\Answer;
use App\Models\User;
use App\Models\Score;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ListSiswa extends Component
{
    use WithPagination;
    
    public $pencarian, $id;

    #[Validate]
    public $name;

    #[Validate]
    public $username;

    #[Validate]
    public $email;

    #[Validate]
    public $nisn;

    #[Validate]
    public $password;
    
    public function render()
    {
        if(strlen($this->pencarian) > 2){
            $data = User::where('role', 'siswa')
                            ->where('name', 'LIKE', '%'. $this->pencarian .'%')
                                ->orWhere('nisn', 'LIKE', '%'. $this->pencarian .'%')->latest()->paginate(10);
        } else {
            $data = User::where('role', 'siswa')->latest()->paginate(10);
        }

        $this->password = $this->nisn;
        
        return view('livewire.list-siswa', compact('data'));
    }

    public function select($id)
    {
        $this->id = $id;

        $find = User::find($id);
        
        $this->name = $find->name;
        $this->username = $find->username;
        $this->email = $find->email;
        $this->nisn = $find->nisn;
        $this->password = $this->nisn;
    }

    public function hapusConfirm()
    {
        $find = User::find($this->id);

        Score::where('nisn', $find->nisn)->delete();
        
        Answer::where('siswa_code_id', $find->nisn)->delete();

        $find->delete();

        session()->flash('status', 'Data berhasil dihapus');

        return redirect()->back();
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'username' => 'required|unique:users,username,'.$this->id,
            'email' => 'required|email|unique:users,email,'.$this->id,
            'nisn' => 'required|unique:users,nisn,'.$this->id,
            'password' => 'required',
        ];
    }

    public function submit()
    {
        $this->validate();

        $find = User::find($this->id);

        $find->update([
            'name' => Str::apa($this->name),
            'username' => Str::lower($this->username),
            'email' => $this->email,
            'nisn' => $this->nisn,
            'role' => 'siswa',
            'password' => Hash::make($this->password),
        ]);

        session()->flash('status', 'Siswa tersimpan!');

        return redirect('/dashboard/daftar-siswa');
    }
}
