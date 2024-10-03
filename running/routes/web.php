<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/* Auth routes */

Route::get('admin/login', [AdminAuthController::class, 'index'])->name('admin.login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
Route::get('/', [FrontendController::class, 'index'])->name('home');

Route::get('/about', [FrontendController::class, 'about'])->name('about');

//Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

//  Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])
//  ->middleware('auth', 'role:admin') //only visible for the admin user
//  ->name('admin.dashboard');