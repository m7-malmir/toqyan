<?php

use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\MusicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use Inertia\Inertia;


Route::get('/musics', [MusicController::class, 'index'])->name('musics.index');
Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');
Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/admin/login', function () {
    return Inertia::render('Admin/Auth/Login');
})->name('admin.login');



Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login.post');


require __DIR__.'/auth.php';
