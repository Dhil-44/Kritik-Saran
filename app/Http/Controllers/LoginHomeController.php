<?php

namespace App\Http\Controllers;

class LoginHomeController extends Controller
{
    public function index()
    {
        return view("auth/form-login");
    }
}
