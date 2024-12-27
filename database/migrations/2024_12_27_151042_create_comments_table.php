<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id('comment_id');
            $table->foreignId('user_id')->constrained('users', 'user_id');
            $table->foreignId('video_id')->constrained('videos', 'video_id');
            $table->text('content');
            $table->timestamps(0);
        });
    }
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};