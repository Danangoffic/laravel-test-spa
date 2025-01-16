<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController as UserAPIController;
use App\Http\Controllers\UserController;

Route::get('/users', [UserAPIController::class, 'getData']);
Route::post('/users', [UserAPIController::class, 'store'])->name('users.api.store');
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
