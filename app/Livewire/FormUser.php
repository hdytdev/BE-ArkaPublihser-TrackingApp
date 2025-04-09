<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\Component;

class FormUser extends Component
{
    public $email;
    public $password;
    public $name;
    public $active;
    public $role;
    public $aktif;
    public $password_confirmation;


    public function store()
    {
        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|string',
            'active' => 'required|boolean',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => $this->role,
            'active' => $this->active,
        ]);

        $this->reset(); // Reset form setelah sukse
        return LivewireAlert::title("success")->text("Data berhasil di hapus!")->success()->show();
    }

    public function render()
    {
        return view('livewire.form-user');
    }
}
