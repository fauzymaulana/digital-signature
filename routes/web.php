<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\IjazahController;
use App\Http\Controllers\frontend\BantuanController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\VerifikasiController;
use App\Http\Controllers\frontend\TentangController;
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

Route::middleware(['guest'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('verifikasi', [VerifikasiController::class, 'index']);
    Route::post('/verifikasi/cek', [VerifikasiController::class, 'cek']);
    Route::get('tentang', [TentangController::class, 'index']);
    Route::get('bantuan', [BantuanController::class, 'index']);
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'authenticate']);
});



Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::resource('dataijazah', IjazahController::class)->except(['show']);
    Route::post('logout', [LoginController::class, 'logout']);
});

// Route::gpostet('verifikasi', [VerifikasiController::class, 'index']);


