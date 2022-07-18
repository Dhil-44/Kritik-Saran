<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Logincontroller extends Controller
{


    public function index ()
    {
        return view("login");
    }
}
