<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('artist'); // هنرمند یا صاحب ویدیو
            $table->string('file_path'); // مسیر فایل ویدیو
            $table->string('thumbnail_image')->nullable(); // تصویر بندانگشتی ویدیو
            $table->text('description')->nullable(); // توضیحات ویدیو
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
};
