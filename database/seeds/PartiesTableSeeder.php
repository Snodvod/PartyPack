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
        	'description' => 'Sweet reggae music & smooth Jamaican vibes are coming your way. Chill out, relax and enjoy a night full of Caribbean delight!'
        ]);

        Party::create([
        	'name' => 'Flower Power Party',
        	'description' => $faker->text()
        ]);

        Party::create([
        	'name' => 'Illusionist magic party',
        	'description' => $faker->text()
        ]);
    }
}
