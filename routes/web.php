<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Guest Routes
Route::group(['middleware' => 'guest'], function () {
   Route::get('/account/register', [AccountController::class, 'register'])->name('account.register');
   Route::get('/account/login', [AccountController::class, 'login'])->name('account.login');
   Route::post('/account/process-register', [AccountController::class, 'processRegister'])->name('account.processregister');
   Route::post('/account/authenticate', [AccountController::class, 'authenticate'])->name('account.authenticate');
});

// Authenticated (Protected) Routes
Route::group(['middleware' => 'auth'], function () {
   Route::get('/account/profile', [AccountController::class, 'profile'])->name('account.profile');
   Route::get('/account/logout', [AccountController::class, 'logout'])->name('account.logout');
   Route::put('/account/update', [AccountController::class, 'updateProfile'])->name('account.update');
   Route::post('/account/change-password', [AccountController::class, 'changePassword'])->name('account.password.update');
});
