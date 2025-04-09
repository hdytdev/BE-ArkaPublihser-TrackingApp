<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\Component;

class UserManagement extends Component
{
    public function delete(string $id)
    {
        if (Gate::allows('delete-user')) {
            return LivewireAlert::title("sorry")->text("Tidak ada aksesss")->error()->show();
        }
        $user = User::find($id);
        if ($user->delete()) {
            LivewireAlert::title("success")->text("Data berhasil di hapus!")->success()->show();
        } else {
            LivewireAlert::title("error")->text("Data berhasil di hapus!")->error()->show();

        }
    }
    public function render()
    {
        return view('livewire.user-management', [
            'users' => User::all(),
        ]);
    }
}
