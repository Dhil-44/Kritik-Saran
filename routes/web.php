<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginHomeController as Home;
use Brian2694\Toastr\Facades\Toastr;


Route::get('/', function () {
    return redirect()->route('home');
});

Route::middleware(['guest:web'])->group(function () {
    Route::get('home', [Home::class, 'index'])->name('home');
});

Route::middleware(['auth:web'])->group(function () {
    Route::view('home-page', 'user.home.content-home')->name('home-page');
    // Route::view('profile', 'user.home.profile')->name('profile');
    Route::view('inbox', 'user.home.kategori.sending-message')->name('inbox.message');
    Route::view('critics', 'user.home.kategori.critics')->name('critics');
    Route::view('suggestions', 'user.home.kategori.suggestion')->name('suggestions');
    Route::view('announcements', 'user.home.kategori.annoucements')->name('announcements');
    Route::get('signout', [Home::class, 'signout'])->name('signout');
    Route::view('user-tables', 'admin.data.user-table')->name('user-tables');
    Route::view('submission-tables', 'admin.data.submission-table')->name('submission-tables');
    // Route::view('feeds', 'admin.data.')
});
// admin
Route::middleware(['auth:web'])->group(function () {
});

Route::group(['prefix' => '/', 'middleware' => ['is_admin']], function () {
    Route::get('home-admin', function () {
        return view('admin.data.dashboard-admin');
    })->name('admin/home');
    Route::view('user-tables', 'admin.data.user-table')->name('user-tables');
    Route::view('submission-tables', 'admin.data.submission-table')->name('submission-tables');
});
