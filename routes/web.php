<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\MusicController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Music;
use App\Models\Video;

Route::get('/musics', [MusicController::class, 'index'])->name('musics.index');



// بارگذاری مسیرهای احراز هویت
require __DIR__.'/auth.php';
