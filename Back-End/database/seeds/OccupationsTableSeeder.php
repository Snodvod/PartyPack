<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Occupation;

class OccupationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('nl_BE');

        Occupation::truncate();

        $occupation = Occupation::create([
        	'type' => $faker->name(),
        	'description' => $faker->text()
        ]);

        $occupation = Occupation::create([
        	'type' => $faker->name(),
        	'description' => $faker->text()
        ]);

        $occupation = Occupation::create([
        	'type' => $faker->name(),
        	'description' => $faker->text()
        ]);
    }
}
