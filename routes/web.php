<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Halaman publik (etalase katalog)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman login
Route::get('/login', [HomeController::class, 'login'])->name('login');