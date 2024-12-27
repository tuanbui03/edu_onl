<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([[
            'user_id' => 3, // Assuming student01 has user_id 3
            'video_id' => 4, // Assuming the first video has video_id 14
            'content' => 'Great video on variables!',
            'created_at' => now(),
            'updated_at' => now(),
        ],]);
    }
}