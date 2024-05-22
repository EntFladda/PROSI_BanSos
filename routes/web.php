<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\RTController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Auth\RegisterController;

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
// Dashboard RW
Route::get('/', [WelcomeController::class,'index']);

<<<<<<< HEAD
=======
// RT
Route::get('/dashboardrt', [RTController::class,'dashboardrt']);

// Masyarakat
Route::get('/dashboardrm', [MasyarakatController::class,'dashboardm']);

// Kelurahan
Route::get('/dashboardrm', [KelurahanController::class,'dashboardm']);
// Show login form
>>>>>>> 339c6d7f146a1d8b0c4e71939c6a962a9f3284c9
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');