<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginHomeController as Home;
use Brian2694\Toastr\Facades\Toastr;

Route::get('/', function () {
    return redirect()->route('home');
});


Route::get('home', [Home::class, 'index'])->name('home');
Route::view('home-page', 'home.content-home')->name('home-page');
Route::view('submission-form', 'home.submission-form')->name('submission-form');
Route::view('profile', 'home.profile')->name('profile');
Route::view('critics', 'home.kategori.critics')->name('critics');
Route::view('suggestions', 'home.kategori.suggestion')->name('suggestions');
Route::view('announcements', 'home.kategori.annoucements')->name('announcements');

Route::get('signout', function () {
    Toastr::success('Berhasil ditambah', 'success');
})->name('signout');
