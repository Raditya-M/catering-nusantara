<?php

use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuPageController;
use App\Http\Controllers\TentangController;
use Illuminate\Support\Facades\Route;

// Halaman publik (etalase katalog)
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [MenuPageController::class, 'index'])->name('menu');
Route::get('/menu/{menu}', [MenuPageController::class, 'show'])->name('menu.show');
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');

// Halaman login
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
});
Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// Halaman admin
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('menus-unggulan', [MenuController::class, 'featured'])->name('menus.featured');
    Route::post('menus-unggulan', [MenuController::class, 'updateFeatured'])->name('menus.featured.update');

    Route::resource('menus', MenuController::class)->except('show');
});