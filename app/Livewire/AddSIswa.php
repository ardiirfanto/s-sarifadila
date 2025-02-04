<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;

class AddSIswa extends Component
{
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

    public function rules()
    {
        return [
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'nisn' => 'required|unique:users,nisn',
            'password' => 'required',
        ];
    }

    public function render()
    {
        $this->password = $this->nisn;
        return view('livewire.add-s-iswa');
    }

    public function submit()
    {
        $this->validate();

        User::create([
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
