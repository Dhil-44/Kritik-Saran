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
        $this->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'The email field is required.',
            'password.required' => 'The password field is required.',

        ]);
        $user = array(
            'email'    => $this->email,
            'password' => $this->password,
        );
        // // if null
        //
        //
        if (Auth::guard('web')->attempt($user)) {
            return redirect()->route('home-page');
        } else {
            return redirect()->route('home')
                ->with('fail', 'These credentials do not match our records.');
        }
    }

    public function render()
    {
        return view('livewire.auth.login-controller');
    }
}
