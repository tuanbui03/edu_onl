<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaylistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('playlists')->insert([
            [
                'teacher_id' => 1, // Assuming the first teacher has teacher_id 1 
                'title' => 'Introduction to Algebra',
                'image' => 'path/to/playlist_image.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}