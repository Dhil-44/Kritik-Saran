<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class LoginController extends Component
{
    public $email, $password;

    public function loginUser()
    {
        // $this->validate([
        //     'email' => 'required|max:30|email',
        //     'password' => 'required|min:8|max:20'
        // ], [
        //     'email.required' => 'Masukkan email anda',
        //     'email.email' => 'Masukkan format email yang benar',
        //     'password.required' => 'Masukkan password',
        //     'password.min' => 'Password minimal 8 karakter',
        //     'password.max' => 'Password maximal 20 karakter',
        // ]);
        $user = array(
            'email'    => $this->email,
            'password' => $this->password,
        );
        if (Auth::guard('web')->attempt($user)) {
            return redirect()->route('home-page');
        } else {
            return redirect()->route('home')
                ->with('fail', 'this account doesnt match');
        }
    }

    public function render()
    {
        return view('livewire.auth.login-controller');
    }
}
