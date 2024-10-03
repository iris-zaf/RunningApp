<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfileController;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('dashboard', [AdminDashboardController::class, 'index'])
        ->middleware('auth', 'role:admin') //only visible for the admin user
        ->name('dashboard');
    Route::get('profile', [ProfileController::class, 'index'])
        ->middleware('auth', 'role:admin') //only visible for the admin user
        ->name('profile');
    Route::put('profile', [ProfileController::class, 'updateProfile'])
        ->middleware('auth', 'role:admin') //only visible for the admin user
        ->name('profile.update');
    Route::put('profile/password', [ProfileController::class, 'updatePassword'])
        ->middleware('auth', 'role:admin') //only visible for the admin user
        ->name('profile.password.update');
});
