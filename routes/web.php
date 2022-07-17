<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginHomeController as Home;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('home', [Home::class, 'index'])->name('home');
Route::view('home-page', 'home.content-home')->name('home-page');
Route::view('submission-form', 'home.submission-form')->name('submission-form');
Route::view('profile', 'home.profile')->name('profile');
<<<<<<< HEAD

=======
Route::view('critics', 'home.kategori.critics')->name('critics');
Route::view('suggestions', 'home.kategori.suggestion')->name('suggestions');
Route::view('announcements', 'home.kategori.annoucements')->name('announcements');
>>>>>>> origin/main
