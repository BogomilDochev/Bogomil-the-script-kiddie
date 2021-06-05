<?php

namespace Database\Seeders;

use App\Models\Picture;
use Illuminate\Database\Seeder;

class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Picture::create([
            'fileName' => 'charles-deluvio-bYXP-ITv4_s-unsplash.jpg',
            'Alt' => 'Dog with hoody'
        ]);

        Picture::create([
            'fileName' => 'elena-cordery-RLlcbkemwnw-unsplash.jpg',
            'Alt' => 'Pineapple with sunglasses'
        ]);

        Picture::create([
            'fileName' => 'franco-antonio-giovanella-kSfv9njQVc8-unsplash.jpg',
            'Alt' => 'Hand face'
        ]);

        Picture::create([
            'fileName' => 'jared-rice-O6DUoIl6NWA-unsplash.jpg',
            'Alt' => 'Funny monkey'
        ]);

        Picture::create([
            'fileName' => 'austin-pacheco-FtL07GM9Q7Y-unsplash.jpg',
            'Alt' => 'Funny faces'
        ]);

        Picture::create([
            'fileName' => 'tengyart-3QlPInLcSaY-unsplash.jpg',
            'Alt' => 'Funny drawn eggs'
        ]);
    }
}
