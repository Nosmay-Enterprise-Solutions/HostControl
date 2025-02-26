<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\PaymasterController;
use App\Http\Controllers\PreferenceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SubscriptionsController;

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

Route::get('/', function () {
    return view('admin.home');
})->name('home');
Route::get('/sign-in', [AuthController::class, 'signIn'])->name('auth-signin')->middleware('guest');
Route::post('/sign-in', [AuthController::class, 'authenticate'])->name('auth-signin')->middleware('guest');
Route::get('/signout', [AuthController::class, 'dismiss'])->name('auth-signout');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('auth-forgot-pass')->middleware('guest');
Route::post('/forgot-password', [AuthController::class, 'forgotPassVerify'])->name('auth-forgot-pass')->middleware('guest');
Route::get('/new-password-sent', [AuthController::class, 'newPassSent'])->name('auth-new-pass-sent')->middleware('guest');
Route::get('/verify-request', [AuthController::class, 'verifyRequest'])->name('auth-verify-request')->middleware('guest');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin-dashboard')->middleware('auth');

// Customer Module
Route::get('/customers/add', [CustomerController::class, 'customer_add'])->name('admin-customer-add')->middleware('auth');
Route::get('/customers/all-customers', [CustomerController::class, 'customer_list'])->name('admin-customer-list')->middleware('auth');
Route::get('/customers/view', [CustomerController::class, 'customer_view'])->name('admin-customer-view')->middleware('auth');

// Lead Module
Route::get('/lead/add', [LeadController::class, 'lead_add'])->name('admin-lead-add')->middleware('auth');
Route::get('/lead/all-leads', [LeadController::class, 'lead_list'])->name('admin-lead-list')->middleware('auth');
Route::get('/lead/view', [LeadController::class, 'lead_view'])->name('admin-lead-view')->middleware('auth');

// Recurring Services
Route::get('/services/recurring-service-add', [ServiceController::class, 'recurring_service_add'])->name('admin-recurring-service-add')->middleware('auth');
Route::get('/services/recurring-services', [ServiceController::class, 'recurring_service_list'])->name('admin-recurring-services-list')->middleware('auth');
Route::get('/services/recurring-service-view', [ServiceController::class, 'recurring_service_view'])->name('admin-recurring-service-view')->middleware('auth');
// Onetime Services
Route::get('/services/onetime-service-add', [ServiceController::class, 'onetime_service_add'])->name('admin-onetime-service-add')->middleware('auth');
Route::get('/services/onetime-services', [ServiceController::class, 'onetime_service_list'])->name('admin-onetime-services-list')->middleware('auth');
Route::get('/services/onetime-service-view', [ServiceController::class, 'onetime_service_view'])->name('admin-onetime-service-view')->middleware('auth');
// Bundled Services
Route::get('/services/bundled-service-add', [ServiceController::class, 'bundled_service_add'])->name('admin-bundled-service-add')->middleware('auth');
Route::get('/services/bundled-services', [ServiceController::class, 'bundled_service_list'])->name('admin-bundled-services-list')->middleware('auth');
Route::get('/services/bundled-service-view', [ServiceController::class, 'bundled_service_view'])->name('admin-bundled-service-view')->middleware('auth');

// Subscriptions
Route::get('/subscriptions/all-subscriptions', [SubscriptionsController::class, 'all_subscriptions'])->name('admin-subscriptions-list')->middleware('auth');

// Finance
Route::get('/finance/all-transactions', [FinanceController::class, 'all_transactions'])->name('admin-transactions-list')->middleware('auth');
Route::get('/finance/all-invoices', [FinanceController::class, 'all_invoices'])->name('admin-invoices-list')->middleware('auth');

Route::get('/preferences/system-users', [PreferenceController::class, 'users'])->name('admin-pr-users')->middleware('auth');
Route::post('/preferences/system-users/create', [AuthController::class, 'create_user'])->name('admin-pr-new-user')->middleware('auth');

Route::get('/preferences/profile', [PreferenceController::class, 'profile'])->name('admin-profile')->middleware('auth');
