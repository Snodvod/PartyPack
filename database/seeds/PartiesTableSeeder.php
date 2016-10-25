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

        $party = Party::create([
        	'name' => $faker->name(),
        	'description' => $faker->text()
        ]);

        $party = Party::create([
        	'name' => $faker->name(),
        	'description' => $faker->text()
        ]);

        $party = Party::create([
        	'name' => $faker->name(),
        	'description' => $faker->text()
        ]);
    }
}
