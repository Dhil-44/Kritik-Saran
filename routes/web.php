<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginHomeController as Home;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::middleware(['guest:web'])->group(function () {
    Route::view('home', 'user.auth/form-login')->name('home');
});

Route::middleware(['auth:web'])->group(function () {
    Route::view('home-page', 'user.home.content-home')->name('home-page');
    // Route::view('profile', 'user.home.profile')->name('profile');
    Route::view('inbox', 'user.home.kategori.sending-message')->name('inbox.message');
    // bisa disingkat
    Route::view('critics', 'user.home.kategori.critics')->name('critics');
    Route::view('suggestions', 'user.home.kategori.suggestion')->name('suggestions');
    Route::view('announcements', 'user.home.kategori.annoucements')->name('announcements');
    // bisa disingkat
    Route::view('pending-message', 'user.home.kategori.pending-message')->name('pending-msg');
    Route::view('news-page', 'user.home.news-page')->name('news-page');
    Route::get('signout', function (Request $req) {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('home');
    })->name('signout');
});

// admin
Route::group(['prefix' => '/', 'middleware' => ['is_admin']], function () {
    Route::view('home-admin', 'admin.data.dashboard-admin')->name('admin/home');
    Route::view('user-tables', 'admin.data.user-table')->name('user-tables');
    Route::view('submission-tables', 'admin.data.submission-table')->name('submission-tables');
    Route::view('feed-tables', 'admin.data.feed-table')->name('feed-tables');
    Route::view('news-tables', 'admin.data.news-tables')->name('news-tables');
});
