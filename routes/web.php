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

// مسیرهای مربوط به ویدیوها و موزیک‌ها
Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');
Route::get('/musics', [MusicController::class, 'index'])->name('musics.index');
Route::get('/musics/create', function() {
    return view('musics.create');
});

Route::post('/musics', [MusicController::class, 'store'])->name('musics.store');
// بارگذاری مسیرهای احراز هویت
require __DIR__.'/auth.php';
