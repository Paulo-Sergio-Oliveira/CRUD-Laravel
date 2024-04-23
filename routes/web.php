<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('/employee', EmployeeController::class);
Route::resource('/users', UserController::class);

Route::view('/', 'pages.home')->name('index');
Route::view('/login', 'pages.session.login')->name('login');
Route::view('/register', 'pages.session.create')->name('create');

Route::get('/logout', [SessionController::class, 'logout'])->name('logout');
Route::post('/auth', [SessionController::class, 'auth'])->name('auth');