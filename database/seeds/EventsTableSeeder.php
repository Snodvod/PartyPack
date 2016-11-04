<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('nl_BE');

        Event::truncate();

        Event::create([
        	'location' => $faker->address(),
        	'price' => $faker->randomDigit(),
        	'date' => $faker->dateTime()
        ]);

        Event::create([
        	'location' => $faker->address(),
        	'price' => $faker->randomDigit(),
        	'date' => $faker->dateTime()
        ]);

        Event::create([
        	'location' => $faker->address(),
        	'price' => $faker->randomDigit(),
        	'date' => $faker->dateTime()
        ]);
    }
}
