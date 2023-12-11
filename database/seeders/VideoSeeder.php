<?php

namespace Database\Seeders;

use App\Enums\TipoVideo;
use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Video::create([
            'title' => 'Elements',
            'main_character' => 'Lindsey Stirling',
            'type' => TipoVideo::MUSICA->value,
            'description' => 'Dubstep Violin Original Song',
            'url' => 'https://www.youtube.com/watch?v=sf6LD2B_kDQ',
        ]);

        Video::create([
            'title' => 'Feel Good Inc.',
            'main_character' => 'Leo Moracchioli',
            'type' => TipoVideo::MUSICA->value,
            'description' => 'Metal cover',
            'url' => 'https://www.youtube.com/watch?v=yNENVZFHutQ',
        ]);

        Video::create([
            'title' => 'Real Madrid',
            'main_character' => 'CRISTIANO RONALDO',
            'type' => TipoVideo::MUSICA->value,
            'description' => 'ALL #UCL GOALS!',
            'url' => 'https://www.youtube.com/watch?v=fJLrfALZGmE',
        ]);
    }
}
