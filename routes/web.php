<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\LoginHomeController as Home;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [Home::class, 'index']);
