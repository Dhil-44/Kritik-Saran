<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class UserController extends Component
{
    public $id_user, $name_user, $email, $role = "user", $logo, $password;
    public $upd_name_user, $upd_email, $upd_role, $upd_logo, $upd_password;
    public $search;
    use WithFileUploads;

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
            'roles' => ['user', 'department']
        ]);
    }

    function openModal()
    {
        $this->clearColumn();
        return $this->dispatchBrowserEvent('openModal');
    }

    function editUser($user)
    {
        $arr = explode('/', $user['logo']);
        $file_name = $arr[count($arr) - 1];
        $this->logo = $user['logo'];
        $this->id_user = $user['id'];
        $this->upd_name_user = $user['name'];
        $this->upd_email = $user['email'];
        $this->upd_role = $user['role'];
        $this->upd_logo = null;
        $this->dispatchBrowserEvent('openEditOpen');
    }

    public function updateUser()
    {
        $this->validate([
            'upd_name_user' => 'required|string|max:50|min:4|regex:/^[\pL\s\-]+$/u',
            'upd_email' => 'required',
            'upd_role' => 'required',
            'upd_logo' => 'nullable|mimes:jpg,png,jpeg|image'
        ], [
            'upd_name_user.regex' => 'Only character',
            'upd_name_user.required' => 'Name user is required',
            'upd_email.required' => 'Email is required',
            'upd_role.required' => 'Role is required',
            'upd_logo.mimes' => 'only image',
        ]);
        $name_user = $this->upd_name_user;
        $path = null;
        if ($this->upd_logo === null) {
            $arr = explode('/', $this->logo);
            $path = $arr[count($arr) - 1];
        } else {
            $path = $this->upd_logo->storeAs("users", "logo-user" . time() . explode(' ', $name_user)[0] . rand(1, 99999) . "." . $this->upd_logo->extension());
            $path = explode('/', $path)[1];
        }

        $user = User::findOrFail($this->id_user)->update([
            'name' => Str::of($name_user)->title()->trim(),
            'email' => $this->upd_email,
            'role' => $this->upd_role,
            'logo' => $path,
        ]);
        if ($user) {
            $this->showToastr("User " . Str::of($name_user)->title()->trim() . " updated successfully!", "info");
            $this->clearColumn();
            return $this->dispatchBrowserEvent('closeEditModal');
        } else {
            $this->showToastr("We're sorry there are something went wrong!", "error");
        }
    }

    function changeProfilePicture(Request $request)
    {
        $user = User::find(auth("web")->id());
        $path = "back/dist/img/authors/";
        $file = $request->file('file');
        $oldPicture = $user->getAttributes()['picture'];
        $filePath = $path . $oldPicture;
        $new_picture_name = 'AIMG' . $user->id . time() . rand(1, 10000) . ".jpg";

        if ($oldPicture != null && File::exists(public_path($filePath))) {
            File::delete(public_path($filePath));
        }
        $upload = $file->move(public_path($path), $new_picture_name);
        if ($upload) {
            $user->update([
                "picture" => $new_picture_name
            ]);
            return response()->json(['status' => 1, 'msg' => 'Your profile picture has been successfully updated.']);
        } else {
            return response()->json(['status' => 0, 'Something went wrong']);
        }
    }

    // cek jika gambar kosong
    public function createNewUser()
    {
        $this->validate([
            'name_user' => 'required|string|max:50|min:4|regex:/^[\pL\s\-]+$/u',
            'email' => ['required', 'email', 'max:100', 'unique:users,email'],
            'role' => 'required',
            'logo' => 'nullable|mimes:jpg,png,jpeg|image',
            'password' => ['required', 'string']
        ], [
            'name_user.regex' => 'only character is accepted.',
            'email.unique' => 'Email already already exists.',
            'logo.mimes' => 'only type of image.',
            'logo.image' => 'only image is accepted.',
        ]);
        $name_user = $this->name_user;
        $path = null;
        if ($this->logo === null) {
            $path = 'guest.png';
        } else {
            $filename = $this->logo->storeAs("users", "logo-user" . time() . explode(' ', $name_user)[0] . rand(1, 99999) . "." . $this->logo->extension());
            $path = explode("/", $filename)[1];
        }
        $user = User::create([
            'name' => Str::of($name_user)->title(),
            'email' => $this->email,
            'role' => $this->role,
            'logo' => $path,
            'password' => Hash::make($this->password),
        ]);
        if ($user) {
            $this->clearColumn();
            $this->showToastr('Data user created successfully', 'success');
            return $this->dispatchBrowserEvent('closeAddUserModal', []);
        } else {
            return back();
        }
    }

    public function deleteUser($id)
    {
        User::findOrFail($id)->delete();
        $this->showToastr("Delete Succeed!", "success");
    }

    private function clearColumn()
    {
        return $this->name_user = $this->email = $this->role = $this->logo = $this->password =
            $this->upd_name_user = $this->upd_email = $this->upd_role = $this->upd_logo = $this->upd_password = null;
    }

    private function showToastr($msg, $type)
    {
        return $this->dispatchBrowserEvent('showToastr', [
            'message' => $msg,
            'type' => $type
        ]);
    }
}
