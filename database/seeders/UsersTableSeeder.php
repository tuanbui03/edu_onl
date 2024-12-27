<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'admin01',
                'password' => Hash::make('adminpass'),
                'fullname' => 'Administrator',
                'dob' => '1975-08-30',
                'email' => 'admin01@example.com',
                'image' => 'path/to/admin_image.jpg',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'teacher01',
                'password' => Hash::make('teacherpass'),
                'fullname' => 'Teacher One',
                'dob' => '1980-05-20',
                'email' => 'teacher01@example.com',
                'image' => 'path/to/teacher_image.jpg',
                'role' => 'teacher',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'student01',
                'password' => Hash::make('studentpass'),
                'fullname' => 'Student One',
                'dob' => '2001-01-01',
                'email' => 'student01@example.com',
                'image' => 'path/to/student_image.jpg',
                'role' => 'student',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}