<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use  Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Component
{
    public $id_user, $name_user, $email, $role, $logo, $password;
    public  $upd_name_user, $upd_email, $upd_role, $upd_logo, $upd_password;
    public $search;
    public function render()
    {
        if ($this->search) {
            $users = User::where(function ($query) {
                $query->where('name', 'LIKE', "%$this->search%")
                    ->orWhere('email', 'LIKE', "%$this->search%");
            })->orderBy('name', 'asc')->get();
        } else {

            $users = User::latest()->where('id', '!=', auth('web')->id())->orderBy('name')->get();
        }
        return view('livewire.admin.user-controller', [
            'users' => $users,
            'roles' => ['user', 'departmen']
        ]);
    }
    function openModal()
    {
        $this->clearColumn();
        return $this->dispatchBrowserEvent('openModal');
    }
    function editUser($user)
    {
        $this->id_user = $user['id'];
        $this->upd_name_user = $user['name'];
        $this->upd_email = $user['email'];
        $this->upd_role = $user['role'];
        $this->upd_logo = $user['logo'];
        $this->dispatchBrowserEvent('openEditOpen');
    }
    public function updateUser()
    {
        $this->validate([
            'upd_name_user' => 'required|string|max:50|min:4|regex:/^[\pL\s\-]+$/u',
            'upd_email' => 'required',
            'upd_role' => 'required',
            // 'logo' => 'required'
        ], [
            'upd_name_user.regex' => 'Only character',
            'upd_name_user.required' => 'Name user is required',
            'upd_email.required' => 'Email is required',
            'upd_role.required' => 'Role is required',
        ]);
        $user  = User::findOrFail($this->id_user)->update([
            'name' => Str::of($this->upd_name_user)->title(),
            'email' => $this->upd_email,
            'role' => $this->upd_role,
            'logo' => $this->upd_logo or '',
        ]);
        $this->clearColumn();
        return $this->dispatchBrowserEvent('closeEditModal');
    }
    public function createNewUser()
    {
        // 'name' => 'required|regex:/^[a-zA-Z]+$/u|max:255|unique:users,name,'.$user->id,
        $this->validate([
            'name_user' => 'required|string|max:50|min:4|regex:/^[\pL\s\-]+$/u',
            'email' => ['required', 'email', 'max:100', 'unique:users,email'],
            'role' => 'required',
            'logo' => 'nullable',
            'password' => ['required', 'string']
        ], [
            'name_user.regex' => 'only character is accepted'
        ]);

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
        return $this->dispatchBrowserEvent('closeAddUserModal');
    }
    public function deleteUser($id)
    {
        User::findOrFail($id)->delete();
    }

    private function clearColumn()
    {
        return $this->name_user = $this->email =  $this->role = $this->logo =  $this->password = null;
    }
}
