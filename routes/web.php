<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\User;
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
    return view('welcome');
});
Route::get('contoh', function () {
    return 'contoh';
});

Route::get('about', function () {
    return view('login');
});

Route::get('get-data', function () {
    try {
        $data  = DB::table('users')->get();
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    } catch (Exception $e) {
        return back();
    }
});
