<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/{id}/post', [UserController::class, 'post'])->name('post');
Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::post('/post-login', [UserController::class, 'login']);

Route::get('/logout', [UserController::class, 'logout']);

Route::resource('/admin', PostController::class)->middleware('auth');
