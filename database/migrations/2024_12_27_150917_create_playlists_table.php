<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylistsTable extends Migration
{
    public function up()
    {
        Schema::create('playlists', function (Blueprint $table) {
            $table->id('playlist_id');
            $table->foreignId('teacher_id')->constrained('teachers', 'teacher_id');
            $table->string('title', 100);
            $table->string('image', 255)->nullable();
            $table->timestamps(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('playlists');
    }
}