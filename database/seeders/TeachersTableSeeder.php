<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teachers')->insert([[
            'user_id' => 2, //teacher01 has user_id 2
            'description' => 'Experienced teacher in mathematics',
            'image' => 'path/to/teacher_profile.jpg',
            'total_playlists' => 5,
            'total_videos' => 20,
            'total_likes' => 100,
            'total_comments' => 50,
            'created_at' => now(),
            'updated_at' => now(),
        ],]);
    }
}