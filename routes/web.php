<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::post('/users/login/', [UserController::class, 'loginPost'])->name('users.loginPost');
Route::post('/users/login/pin/', [UserController::class, 'pinLoginPost'])->name('users.pin.login');

Route::get('/', function () {
    return Inertia::render('Auth/UsernamePasswordLogin');
})->name('users.login.password');

Route::get('/users/login/pin', function () {
    return Inertia::render('Auth/Index');
})->name('users.login.pin');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/report', function () {
    return Inertia::render('Report/Index');
})->name('report.index');

Route::get('/branch', function () {
    return Inertia::render('Branch/Index');
})->name('branches.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
