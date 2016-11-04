<?php

use App\Image;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User's images

        Image::create([
            'image' => 'eek.jpg',
            'imageable_id' => 1,
            'imageable_type' => 'App\User'
        ]);
        Image::create([
            'image' => 'dynamo.jpg',
            'imageable_id' => 2,
            'imageable_type' => 'App\User'
        ]);
        Image::create([
            'image' => 'ozomatli.jpg',
            'imageable_id' => 3,
            'imageable_type' => 'App\User'
        ]);
        Image::create([
            'image' => 'netwerk.jpg',
            'imageable_id' => 4,
            'imageable_type' => 'App\User'
        ]);

        // Party's images

        Image::create([
            'image' => 'jamaica.jpg',
            'imageable_id' => 1,
            'imageable_type' => 'App\Party'
        ]);
        Image::create([
            'image' => 'brazil.jpg',
            'imageable_id' => 2,
            'imageable_type' => 'App\Party'
        ]);
        Image::create([
            'image' => 'magician.jpg',
            'imageable_id' => 3,
            'imageable_type' => 'App\Party'
        ]);
    }
}
