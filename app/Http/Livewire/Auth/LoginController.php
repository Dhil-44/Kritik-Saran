<?php

namespace App\Http\Livewire\Auth;

use http\Env\Response;
use Illuminate\Database\QueryException;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class LoginController extends Component
{
    public $email, $password;

    public function loginUser()
    {
        try {
            $this->validate([
                'email' => 'required',
                'password' => 'required'
            ], [
                'email.required' => 'The email field is required.',
                'password.required' => 'The password field is required.',

            ]);
            $user = array(
                'email' => $this->email,
                'password' => $this->password,
            );
            if (Auth::guard('web')->attempt($user)) {
                return redirect()->route('home-page');
            } else {
                return redirect()->route('home')
                    ->with('fail', 'These credentials do not match our records.');
            }
        } catch (\Exception $e) {
            return session()->flash('exception','There are something went wrong!');
        }
    }

    public function render()
    {
        return view('livewire.auth.login-controller');
    }
}
