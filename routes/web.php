<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelurahanController;
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
//Show Login Form
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Define routes for each role's dashboard
// Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/dashboardm', [MasyarakatController::class, 'dashboardm'])->name('dashboardm');
Route::get('/dashboardrt', [RtController::class, 'dashboardrt'])->name('dashboardrt');
Route::get('/dashboardrw', [RwController::class, 'dashboardrw'])->name('dashboardrw');
Route::get('/dashboardk', [KelurahanController::class, 'dashboardk'])->name('dashboardk');

// Home route
Route::get('/home', [HomeController::class, 'showHome'])->name('home');

//Show register form

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Handle login
Route::post('/login', [LoginController::class, 'login']);

// Masyarakat
Route::get('/informasi', [MasyarakatController::class,'informasi']);
Route::get('/informasi/detail/{id}', [MasyarakatController::class,'informasidetail']);
Route::get('/konfirmasi', [MasyarakatController::class,'konfirmasi']);
Route::get('/konfirmasi/detail/{id}', [MasyarakatController::class,'konfirmasidetail']);
Route::get('/pengajuanm', [MasyarakatController::class,'pengajuanm']);

// RT
Route::get('/pengajuanrt', [RTController::class,'pengajuanrt']);
Route::get('/laporanpengajuan', [RTController::class,'laporanpengajuan']);
Route::get('/laporanpengajuan/detail/{id}', [RTController::class,'laporanpengajuandetail']);
Route::get('/laporanpenerimaan', [RTController::class,'laporanpenerimaan']);
Route::get('/laporanpenerimaan/detail/{id}', [RTController::class,'laporanpenerimaandetail']);

// RW
Route::get('/datapengajuan', [RWController::class,'datapengajuan']);
Route::get('/datapengajuan/detail/{id}', [RWController::class,'datapengajuandetail']);
Route::get('/laporanpengajuanrw', [RWController::class,'laporanpengajuanrw']);
Route::get('/laporanpengajuanrw/detail/{id}', [RWController::class,'laporanpengajuanrwdetail']);
Route::get('/laporanpenerimaanrw', [RWController::class,'laporanpenerimaanrw']);
Route::get('/laporanpenerimaanrw/detail/{id}', [RWController::class,'laporanpenerimaanrwdetail']);
Route::get('/validasi', [RWController::class,'validasi']);
Route::get('/validasi/detail/{id}', [RWController::class,'validasidetail']);
Route::delete('/validasi/delete/{id}', [RWController::class,'delete']);
Route::get('/aras', [RWController::class,'aras']);
Route::get('/data_kriteria_aras', [RWController::class,'data_kriteria_aras']);
Route::get('/data_sub_kriteria', [RWController::class,'data_sub_kriteria']);
Route::get('/data_alternatif', [RWController::class,'data_alternatif']);
Route::get('/data_penilaian', [RWController::class,'data_penilaian']);
Route::get('/data_perhitungan', [RWController::class,'data_perhitungan']);
Route::get('/data_hasil_akhir', [RWController::class,'data_hasil_akhir']);
Route::get('/lihat_pengajuan_disetujui/{id}', [RWController::class,'validasisetuju']);
Route::get('/lihat_pengajuan_ditolak/{id}', [RWController::class,'validasitolak']);

// Kelurahan
Route::get('/informasik', [KelurahanController::class,'informasik']);
Route::get('/informasik/detail/{id}', [KelurahanController::class,'informasikdetail']);
Route::get('/laporanpenerimaank', [KelurahanController::class,'laporanpenerimaank']);

Route::get('/validasik', [KelurahanController::class,'validasik']);
Route::get('/laporanpenerimaank/detail/{id}', [KelurahanController::class,'laporanpenerimaankdetail']);
Route::get('/validasik', [KelurahanController::class,'validasik']);
Route::get('/validasik/detail/{id}', [KelurahanController::class,'validasikdetail']);
Route::get('/lihat_pengajuan_disetujui/{id}', [KelurahanController::class,'validasiksetuju']);
Route::get('/lihat_pengajuan_ditolak/{id}', [KelurahanController::class,'validasiktolak']);

//Show Login Form
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Define routes for each role's dashboard
// Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/dashboardm', [MasyarakatController::class, 'dashboardm'])->name('dashboardm');
Route::get('/dashboardrt', [RtController::class, 'dashboardrt'])->name('dashboardrt');
Route::get('/dashboardrw', [RwController::class, 'dashboardrw'])->name('dashboardrw');
Route::get('/dashboardk', [KelurahanController::class, 'dashboardk'])->name('dashboardk');

// Home route
// Route::get('/home', [HomeController::class, 'index'])->name('home');

//Show register form

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);


Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Handle login
Route::post('/login', [LoginController::class, 'login']);
