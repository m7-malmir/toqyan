<?php
// app/Http/Controllers/MusicController.php
namespace App\Http\Controllers;

use App\Models\Music; // مدل صحیح رو ایمپورت کن
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index()
    {
        $musics = Music::all(); // باید لیست موزیک‌ها رو بگیری، نه ویدیوها!
        return view('musics.index', compact('musics')); // مسیر ویو هم باید برای موزیک باشه
    }
    public function store(Request $request)
    {
        // اعتبارسنجی ورودی‌ها
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'file_path' => 'required|file|mimes:mp3,wav',
            'cover_image' => 'nullable|file|mimes:jpeg,png,jpg',
            'description' => 'nullable|string',
        ]);

        // ذخیره فایل‌های آپلود شده
        $filePath = $request->file('file_path')->store('music_files', 'public');
        $coverImagePath = $request->file('cover_image') ? $request->file('cover_image')->store('cover_images', 'public') : null;

        // ایجاد موزیک جدید
        $music = new Music();
        $music->title = $request->input('title');
        $music->artist = $request->input('artist');
        $music->file_path = $filePath;
        $music->cover_image = $coverImagePath;
        $music->description = $request->input('description');
        $music->save();

        return redirect()->back()->with('message', 'Music added successfully!');
    }
}
