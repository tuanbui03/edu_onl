<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([[
            'title' => 'Advanced Mathematics',
            'image' => 'path/to/course_image.jpg',
            'description' => 'A comprehensive course on advanced mathematics topics.',
            'teacher_id' => 1, // Assuming the first teacher has teacher_id 1 
            'created_at' => now(),
            'updated_at' => now(),
        ],]);
    }
}