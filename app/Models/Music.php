<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    protected $table = 'musics'; // نام جدول در دیتابیس
    protected $fillable = ['title', 'artist', 'file_path', 'cover_image', 'description'];
}

