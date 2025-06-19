<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'showLogin'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/', [ProjectController::class, 'index']);
    Route::prefix('/projects')->group(function () {
        Route::get('/data', [ProjectController::class, 'data']);
        Route::post('/create', [ProjectController::class, 'store']);
        Route::get('/{id}', [ProjectController::class, 'show']);
        Route::put('/{id}', [ProjectController::class, 'update']);
        Route::put('/{id}/update-status', [ProjectController::class, 'updateStatus']);
        Route::delete('/{id}', [ProjectController::class, 'destroy']);
    });
    Route::prefix('/tasks')->group(function () {
        Route::post('/create', [TaskController::class, 'store']);
        Route::put('/{id}', [TaskController::class, 'update']);
        Route::put('/{id}/update-status', [TaskController::class, 'updateStatus']);
        Route::delete('/{id}', [TaskController::class, 'destroy']);
    });
    Route::prefix('/account')->group(function () {
        Route::get('/settings', [AccountController::class, 'index']);
        Route::put('/change-password', [AccountController::class, 'changePassword']);
        Route::put('/update', [AccountController::class, 'update']);
    });
    Route::prefix('/user-management')->middleware('role:admin')->group(function () {
        Route::get('/', [UserController::class, 'index']);
        Route::get('/data', [UserController::class, 'data']);
        Route::post('/create', [UserController::class, 'store']);
        Route::put('/{id}', [UserController::class, 'update']);
        Route::put('/{id}/update-password', [UserController::class, 'updatePassword']);
        Route::delete('/{id}', [UserController::class, 'destroy']);
    });
});
