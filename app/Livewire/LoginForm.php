<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Component
{
    #[Validate]
    public $email;

    #[Validate]
    public $password;

    public function render()
    {
        return view('livewire.login-form');
    }

    public function rules()
    {
        return [
            'email' => 'required|min:5',
            'password' => 'required|min:5',
        ];
    }

    public function loginProcess()
    {
        $validated = $this->validate();

        if(!$validated){
            return redirect()->back();
        }

        if (Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ])) {
            return redirect()->intended('dashboard');
            
        } else {
            session()->flash('status', 'Email atau Password Salah!');
            return redirect()->back();
        }
    }
}
