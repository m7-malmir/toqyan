<?php
namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // گرفتن تمام موزیک‌ها و ویدیوها
        $musics = Music::all();
        $videos = Video::all();

        // ارسال به ویو
        return view('home', compact('musics', 'videos'));
    }
}

