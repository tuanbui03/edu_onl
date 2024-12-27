<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id('course_id');
            $table->string('title', 100);
            $table->string('image', 255)->nullable();
            $table->text('description')->nullable();
            $table->foreignId('teacher_id')->constrained('teachers', 'teacher_id');
            $table->timestamps(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}