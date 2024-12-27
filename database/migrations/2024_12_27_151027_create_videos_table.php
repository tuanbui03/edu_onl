<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id('video_id');
            $table->foreignId('playlist_id')->constrained('playlists', 'playlist_id');
            $table->string('title', 100);
            $table->string('url', 255);
            $table->time('duration');
            $table->timestamps(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('videos');
    }
}