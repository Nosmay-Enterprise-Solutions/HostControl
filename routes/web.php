<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymasterController;
use App\Http\Controllers\PreferenceController;

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

Route::get('/', [AuthController::class, 'signIn'])->name('auth-signin')->middleware('guest');
Route::post('/', [AuthController::class, 'authenticate'])->name('auth-signin')->middleware('guest');
Route::get('/signout', [AuthController::class, 'dismiss'])->name('auth-signout');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('auth-forgot-pass')->middleware('guest');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin-dashboard')->middleware('auth');
Route::get('/paymaster/applications', [PaymasterController::class, 'applications'])->name('admin-pm-app')->middleware('auth');

Route::get('/preferences/system-users', [PreferenceController::class, 'users'])->name('admin-pr-users')->middleware('auth');
