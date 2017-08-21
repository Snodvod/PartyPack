<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Party;

class PartiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('nl_BE');

        Party::truncate();

        Party::create([
        	'name' => 'Jamaican Reggae delight',
            'description' => 'Sweet reggae music & smooth Jamaican vibes are coming your way. Chill out, relax and enjoy a night full of Caribbean delight!',
            'image_url' => 'jamaica.jpg'
        ]);

        Party::create([
        	'name' => 'Flower Power Party',
            'description' => 'Enjoy this fully-themed 70s party with its typical music, delicacies and drinks',
            'image_url' => 'flower.jpg'
        ]);

        Party::create([
        	'name' => 'Illusionist magic party',
            'description' => "Be tricked and deceived by magic. This party isn't your typical pulling-a-rabbit-out-of-your-hat, our magician will make people disappear and cut them in half, magically of course.",
            'image_url' => 'magician.jpg'
        ]);
    }
}
