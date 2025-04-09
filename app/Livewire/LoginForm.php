<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\Component;

class LoginForm extends Component
{
    public $email;
    public $password;
    public function login()
    {
        $login = $this->validate([
            'email' => ['required', 'email'],
            'password' => "required"
        ]);

        if (Auth::attempt($login)) {
            LivewireAlert::title("Success")->success()->text("login berhasil! Tunggu sebentar anda akan diarahkan ke halaman login")->show();
            return to_route("admin.home");
        }
        LivewireAlert::title("Error")->error()->text("login gagal! silahkan cek ulang inputan anda")->show();

    }
    public function render()
    {
        return view('livewire.login-form');
    }
}
