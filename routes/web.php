<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\RTController;
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
// Dashboard RW
Route::get('/', [WelcomeController::class,'index']);

// RT
Route::get('/dashboardrt', [RTController::class,'dashboardrt']);

// Masyarakat
Route::get('/dashboardrm', [MasyarakatController::class,'dashboardm']);

// Kelurahan
Route::get('/dashboardrm', [KelurahanController::class,'dashboardm']);
// Show login form
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Handle login
Route::post('/login', [LoginController::class, 'login']);