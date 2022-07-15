<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginHomeController as Home;

Route::get('/', function () {
    return redirect()->route('home');
});


Route::get('Wercome', [Home::class, 'index'])->name('home');

Route::view('home-page', 'home.tampilan-utama')->name('home-page');
Route::view('profile', 'home.profile')->name('profile');
