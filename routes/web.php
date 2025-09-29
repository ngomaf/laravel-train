<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/create-user', [UserController::class, 'create'])->name('user.create');
Route::get('/create-login', [UserController::class, 'login'])->name('user.login');
