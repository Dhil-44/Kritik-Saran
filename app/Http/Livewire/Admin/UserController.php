<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class UserController extends Component
{
    public function render()
    {

        return view('livewire.admin.user-controller', [
            'users' => User::where('id', '!=', auth('web')->id())->orderBy('name')->get(),
        ]);
    }
}
