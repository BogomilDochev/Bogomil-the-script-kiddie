<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::create([
            'URL' => 'https://www.youtube.com/watch?v=VB4CCHHYOqY'
        ]);

        Video::create([
            'URL' => 'https://www.youtube.com/watch?v=5dsGWM5XGdg'
        ]);

        Video::create([
            'URL' => 'https://www.youtube.com/watch?v=d8DgndRyHWM'
        ]);

        Video::create([
            'URL' => 'https://www.youtube.com/watch?v=a3o9a6pBKz8'
        ]);
    }
}
