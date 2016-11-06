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
            'imageable_id' => 3,
            'imageable_type' => 'App\User'
        ]);
        Image::create([
            'image' => 'dynamo.jpg',
            'imageable_id' => 4,
            'imageable_type' => 'App\User'
        ]);
        Image::create([
            'image' => 'ozomatli.jpg',
            'imageable_id' => 5,
            'imageable_type' => 'App\User'
        ]);
        Image::create([
            'image' => 'acurio.jpg',
            'imageable_id' => 6,
            'imageable_type' => 'App\User'
        ]);
        Image::create([
            'image' => 'acurio2.jpg',
            'imageable_id' => 6,
            'imageable_type' => 'App\User'
        ]);
        Image::create([
            'image' => 'netwerk.jpg',
            'imageable_id' => 7,
            'imageable_type' => 'App\User'
        ]);
        Image::create([
            'image' => 'cokeweed.jpg',
            'imageable_id' => 8,
            'imageable_type' => 'App\User'
        ]);


        // Party's images

        Image::create([
            'image' => 'jamaica.jpg',
            'imageable_id' => 1,
            'imageable_type' => 'App\Party'
        ]);
        Image::create([
            'image' => 'bbq.jpg',
            'imageable_id' => 1,
            'imageable_type' => 'App\Party'
        ]);
        Image::create([
            'image' => 'jamaicanfood.jpg',
            'imageable_id' => 1,
            'imageable_type' => 'App\Party'
        ]);
        Image::create([
            'image' => 'sfeer.jpg',
            'imageable_id' => 1,
            'imageable_type' => 'App\Party'
        ]);
        Image::create([
            'image' => 'flower.jpg',
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
