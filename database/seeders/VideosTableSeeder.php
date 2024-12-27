<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('videos')->insert([
            [
                'playlist_id' => 2, // Assuming the first playlist has playlist_id 1 
                'title' => 'Introduction to Variables',
                'url' => 'path/to/video.mp4',
                'duration' => '00:15:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}