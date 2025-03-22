<?php

use App\Http\Controllers\ConfigurationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\AdministrationController;

Route::get('/', function () { return view('admin.home'); })->name('home');
Route::get('/authenticate', [AuthController::class, 'signIn'])->name('login')->middleware('guest');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->middleware('guest');
Route::get('/signout', [AuthController::class, 'dismiss'])->name('auth-signout');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('auth-forgot-pass')->middleware('guest');
Route::post('/forgot-password', [AuthController::class, 'forgotPassVerify'])->name('auth-forgot-pass')->middleware('guest');
Route::get('/new-password-sent', [AuthController::class, 'newPassSent'])->name('auth-new-pass-sent')->middleware('guest');
Route::get('/verify-request', [AuthController::class, 'verifyRequest'])->name('auth-verify-request')->middleware('guest');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin-dashboard')->middleware('auth');

// Administrators Module
Route::get('/administration', function () { return view('admin.administration.administration'); })->name('admin.administration');
Route::get('/administration/company/administrators', function () { return view('admin.administration.administrators'); })->name('admin.administration.administrators');

Route::get('/administration/company/roles', [AdministrationController::class, 'roles'])->name('admin.administration.roles');

Route::get('/administration/company/partners', [AdministrationController::class, 'partners'])->name('admin.administration.partners');
Route::post('/administration/company/partners', [AdministrationController::class, 'add_partner']);
Route::post('/administration/company/partners/edit', [AdministrationController::class, 'modify_partner'])->name('admin.administration.modify-partners');

Route::get('/administration/company/locations', [AdministrationController::class, 'locations'])->name('admin.administration.locations');
Route::post('/administration/company/locations', [AdministrationController::class, 'add_location']);

Route::get('/administration/finance/taxes', [AdministrationController::class, 'taxes'])->name('admin.administration.taxes');

Route::get('/configuration', function () { return view('admin.configuration.configuration'); })->name('admin.configuration');

Route::get('/configuration/modules', [ConfigurationController::class, 'modules'])->name('admin.configuration.modules');
Route::get('/configuration/modules/{id}/{state}/{change}', [ConfigurationController::class, 'changeState'])->name('admin.configuration.modules.change-state');

// Customer Module
Route::get('/customers/all-customers/add', [CustomerController::class, 'customer_add'])->name('admin-customer-add')->middleware('auth');
Route::post('/customers/all-customers/add', [CustomerController::class, 'process_customer_add'])->middleware('auth');
Route::get('/customers/all-customers', [CustomerController::class, 'customer_list'])->name('admin-customer-list')->middleware('auth');
Route::get('/customers/{code}/view', [CustomerController::class, 'customer_view'])->name('admin-customer-view')->middleware('auth');
Route::get('/customers/get-location/{id}', [CustomerController::class, 'get_location'])->middleware('auth');

// Lead Module
Route::get('/leads/all-leads/add', [LeadController::class, 'add_lead'])->name('admin-lead-add')->middleware('auth');
Route::post('/leads/all-leads/add', [LeadController::class, 'process_add_lead'])->name('admin-lead-add')->middleware('auth');
Route::get('/leads/all-leads', [LeadController::class, 'lead_list'])->name('admin-lead-list')->middleware('auth');
Route::get('/leads/{code}/view', [LeadController::class, 'lead_view'])->name('admin-lead-view')->middleware('auth');

// Recurring Services
Route::get('/service-plans/recurring-services/add', [ServiceController::class, 'recurring_service_add'])->name('admin-recurring-service-add')->middleware('auth');
Route::get('/service-plans/recurring-services', [ServiceController::class, 'recurring_service_list'])->name('admin-recurring-services-list')->middleware('auth');
Route::get('/service-plans/recurring-services/view', [ServiceController::class, 'recurring_service_view'])->name('admin-recurring-service-view')->middleware('auth');
// Onetime Services
Route::get('/service-plans/onetime-services/add', [ServiceController::class, 'onetime_service_add'])->name('admin-onetime-service-add')->middleware('auth');
Route::get('/service-plans/onetime-services', [ServiceController::class, 'onetime_service_list'])->name('admin-onetime-services-list')->middleware('auth');
Route::get('/service-plans/onetime-services/view', [ServiceController::class, 'onetime_service_view'])->name('admin-onetime-service-view')->middleware('auth');
// Bundled Services
Route::get('/service-plans/bundled-services/add', [ServiceController::class, 'bundled_service_add'])->name('admin-bundled-service-add')->middleware('auth');
Route::get('/service-plans/bundled-services', [ServiceController::class, 'bundled_service_list'])->name('admin-bundled-services-list')->middleware('auth');
Route::get('/service-plans/bundled-services/view', [ServiceController::class, 'bundled_service_view'])->name('admin-bundled-service-view')->middleware('auth');

// Subscriptions
Route::get('/subscriptions/all-subscriptions', [SubscriptionController::class, 'all_subscriptions'])->name('admin-subscriptions-list')->middleware('auth');

// Finance
Route::get('/finance/all-transactions', [FinanceController::class, 'all_transactions'])->name('admin-transactions-list')->middleware('auth');
Route::get('/finance/all-invoices', [FinanceController::class, 'all_invoices'])->name('admin-invoices-list')->middleware('auth');

Route::get('/preferences/system-users', [PreferenceController::class, 'users'])->name('admin-pr-users')->middleware('auth');
Route::post('/preferences/system-users/create', [AuthController::class, 'create_user'])->name('admin-pr-new-user')->middleware('auth');

Route::get('/preferences/profile', [PreferenceController::class, 'profile'])->name('admin-profile')->middleware('auth');

