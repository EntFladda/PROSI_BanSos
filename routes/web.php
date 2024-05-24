<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\RTController;
use App\Http\Controllers\RWController;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// RW
Route::get('/dashboardrw', [RWController::class,'dashboardrw']);
Route::get('/datapengajuan', [RWController::class,'datapengajuan']);
Route::get('/laporanpengajuanrw', [RWController::class,'laporanpengajuanrw']);
Route::get('/laporanpenerimaanrw', [RWController::class,'laporanpenerimaanrw']);
Route::get('/validasi', [RWController::class,'validasi']);

// RT
Route::get('/dashboardrt', [RTController::class,'dashboardrt']);
Route::get('/pengajuan', [RTController::class,'pengajuan']);
Route::get('/laporanpengajuan', [RTController::class,'laporanpengajuan']);
Route::get('/laporanpenerimaan', [RTController::class,'laporanpenerimaan']);

// Masyarakat
Route::get('/dashboardm', [MasyarakatController::class,'dashboardm']);
Route::get('/informasi', [MasyarakatController::class,'informasi']);
Route::get('/konfirmasi', [MasyarakatController::class,'konfirmasi']);
Route::get('/pengajuanm', [MasyarakatController::class,'pengajuanm']);

// Kelurahan
Route::get('/dashboardk', [KelurahanController::class,'dashboardk']);
Route::get('/informasik', [KelurahanController::class,'informasik']);
Route::get('/laporanpenerimaank', [KelurahanController::class,'laporanpenerimaank']);
Route::get('/validasik', [KelurahanController::class,'validasik']);

// Show login form
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Handle login
Route::post('/login', [LoginController::class, 'login']);
