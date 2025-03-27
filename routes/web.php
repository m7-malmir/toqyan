<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\MusicController;
use App\Models\Music;
use App\Models\Video;

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group
| which contains the "web" middleware group. Now create something great!
|
*/

// صفحه اصلی سایت، به کامپوننت 'Home' ارجاع می‌دهیم
Route::get('/', function () {
    // گرفتن داده‌ها از دیتابیس
    $musics = Music::all();
    $videos = Video::all();

    // ارسال داده‌ها به کامپوننت Home از طریق Inertia
    return Inertia::render('Home', [
        'musics' => $musics,
        'videos' => $videos,
    ]);
});

// صفحه داشبورد برای کاربران احراز هویت شده
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// مسیرهای مربوط به پروفایل کاربر
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
});
Route::get('/profile', function () {
    return Inertia::render('Auth/Login');
}); 
Route::get('/musics', function () {
    return Inertia::render('Musics/Index');
});

Route::get('/musics/create', function () {
    return Inertia::render('Musics/Create');
});

Route::get('/videos', function () {
    return Inertia::render('Videos/Index'); 
});
// بارگذاری مسیرهای احراز هویت
require __DIR__.'/auth.php';



