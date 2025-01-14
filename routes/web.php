<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);

Route::resource('users', UserController::class)->middleware('auth');

Route::get('login', [LoginController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate'])->middleware('guest');

Route::post('logout', [LogoutController::class, 'logout'])->name('logout')->middleware('auth');
// Route::get('/users', [UserController::class, 'index']);
// Route::get('/users/create', [UserController::class, 'create']);
// Route::post('/users', [UserController::class, 'store']);
// Route::get('/users/{user:id}', [UserController::class, 'show']);
// Route::get('/users/{user:id}/edit', [UserController::class, 'edit']);
// Route::put('/users/{user:id}', [UserController::class, 'update']);
// Route::delete('/users/{user:id}', [UserController::class, 'destroy']);
