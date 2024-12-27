<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('username', 50)->unique();
            $table->string('password');
            $table->string('fullname', 100)->nullable();
            $table->date('dob')->nullable();
            $table->string('email', 100)->unique()->nullable();
            $table->string('image', 255)->nullable();
            $table->enum('role', ['admin', 'teacher', 'student'])->default('student');
            $table->timestamps(0);
        });
    }
    public function down()
    {
        Schema::dropIfExists('users');
    }
}