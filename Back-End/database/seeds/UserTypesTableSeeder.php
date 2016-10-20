<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\UserType;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('nl_BE');

        UserType::truncate();

        $userType = UserType::create([
        	'name' => 'admin',
        	'description' => $faker->text()
        ]);

        $userType = UserType::create([
        	'name' => 'artist',
        	'description' => $faker->text()
        ]);

        $userType = UserType::create([
        	'name' => 'user',
        	'description' => $faker->text()
        ]);
    }
}
