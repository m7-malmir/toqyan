<?php

use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\MusicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;

Route::get('/musics', [MusicController::class, 'index'])->name('musics.index');
Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');


// مسیرهای ادمین فقط برای کاربران احراز هویت‌شده
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');



// بارگذاری مسیرهای احراز هویت
require __DIR__.'/auth.php';
