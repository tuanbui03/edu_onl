<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id('teacher_id');
            $table->foreignId('user_id')->constrained('users', 'user_id');
            $table->text('description')->nullable();
            $table->string('image', 255)->nullable();
            $table->integer('total_playlists')->default(0);
            $table->integer('total_videos')->default(0);
            $table->integer('total_likes')->default(0);
            $table->integer('total_comments')->default(0);
            $table->timestamps(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}