<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
});

// Route::get('/login', function () {
//     return view('auth.login');
// });

Route::get('/login', [AuthController::class, 'showLogin'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/', [ProjectController::class, 'index']);
    Route::prefix('/projects')->group(function () {
        Route::get('/data', [ProjectController::class, 'data']);
        Route::get('/create', [ProjectController::class, 'create']);
        Route::post('/create', [ProjectController::class, 'store']);
        Route::get('/{id}', [ProjectController::class, 'show']);
        Route::get('/{id}/edit', [ProjectController::class, 'edit']);
        Route::put('/{id}', [ProjectController::class, 'update']);
        Route::delete('/{id}', [ProjectController::class, 'destroy']);
    });
    Route::prefix('/account')->group(function () {
        Route::get('/settings', [AccountController::class, 'index']);
        Route::put('/change-password', [AccountController::class, 'changePassword']);
        Route::put('/update', [AccountController::class, 'update']);
    });
});
