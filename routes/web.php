<?php

use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuPageController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\Admin\TestimoniController as AdminTestimoniController;
use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;

// Halaman publik (etalase katalog)
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [MenuPageController::class, 'index'])->name('menu');
Route::get('/menu/{menu}', [MenuPageController::class, 'show'])->name('menu.show');
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');
Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni');
Route::post('/testimoni', [TestimoniController::class, 'store'])->name('testimoni.store');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

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
    Route::post('testimoni', [AdminTestimoniController::class, 'store'])->name('testimoni.store');
    Route::post('testimoni/{testimoni}/approve', [AdminTestimoniController::class, 'toggleApprove'])->name('testimoni.approve');
    Route::post('testimoni/{testimoni}/home', [AdminTestimoniController::class, 'toggleHome'])->name('testimoni.home');
    Route::delete('testimoni/{testimoni}', [AdminTestimoniController::class, 'destroy'])->name('testimoni.destroy');

    Route::get('menus-unggulan', [MenuController::class, 'featured'])->name('menus.featured');
    Route::post('menus-unggulan', [MenuController::class, 'updateFeatured'])->name('menus.featured.update');

    Route::resource('menus', MenuController::class)->except('show');
});