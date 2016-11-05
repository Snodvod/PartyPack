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

        Occupation::create([
        	'type' => 'Musician',
        	'description' => $faker->text()
        ]);

        Occupation::create([
        	'type' => 'Cook',
        	'description' => $faker->text()
        ]);

        Occupation::create([
        	'type' => 'Dancer',
        	'description' => $faker->text()
        ]);

        Occupation::create([
            'type' => 'Magician',
            'description' => $faker->text()
        ]);
    }
}
