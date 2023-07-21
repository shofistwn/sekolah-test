<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TokenController;
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

Route::controller(TokenController::class)->group(function () {
    Route::get('/generate-token/{user}', 'generateToken');
    Route::get('/verify-token/{user}/{token}', 'verifyToken');
});

Route::controller(SiswaController::class)->group(function () {
    Route::get('nilai', 'daftarNilai');
    Route::get('siswa/{namaSiswa}', 'createSiswa');
    Route::get('siswa', 'daftarSiswa');
});
