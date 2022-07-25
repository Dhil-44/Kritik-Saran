<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use  Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Component
{
    public $name_user, $email, $role = "user", $logo = null, $password;
    public function render()
    {

        return view('livewire.admin.user-controller', [
            'users' => User::latest()->where('id', '!=', auth('web')->id())->orderBy('name')->get(),
            'roles' => ['user', 'departmen']
        ]);
    }

    public function createNewUser()
    {
        $this->validate([
            'name_user' => ['required', 'string', 'max:20', 'min:4'],
            'email' => ['required', 'email', 'max:100', 'unique:users,email'],
            'role' => 'required',
            // 'logo'
            'password' => ['required', 'string']
        ], []);

        $user =  User::create([
            'name' => Str::of($this->name_user)->title(),
            'email' => $this->email,
            'role' => $this->role,
            'logo' => '',
            'password' => Hash::make($this->password),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
        $this->clearColumn();
        return back();
    }
    public function deleteUser($id)
    {
        User::findOrFail($id)->delete();
    }

    private function clearColumn()
    {
        $this->name_user = $this->email =  $this->role = $this->logo =  $this->password = null;
    }
}
