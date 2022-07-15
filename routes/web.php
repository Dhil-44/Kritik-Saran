<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginHomeController as Home;

Route::get('/', function () {
    return redirect()->route('home');
});

<<<<<<< HEAD
Route::get('login', function () {
    return view('login');
});
=======

Route::get('home', [Home::class, 'index'])->name('home');
Route::view('home-page', 'home.content-home')->name('home-page');
Route::view('submission-form', 'home.submission-form')->name('submission-form');
Route::view('profile', 'home.profile')->name('profile');
>>>>>>> origin/ersalomo
