<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/jnt', function () {
    return view('jnt');
});

Route::view('barcode', 'barcode');

Route::get('/submitpengiriman', [App\Http\Controllers\PengirimanController::class, 'submitpengiriman'])->name('submitpengiriman');
