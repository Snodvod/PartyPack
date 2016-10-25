<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use App\Occupation;
use App\Event;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create('nl_BE');

        User::truncate();
        DB::table('tblUserEvent')->truncate();
        DB::table('tblUserOccupation')->truncate();

        $user = User::create([
        	'firstName' => $faker->firstName(),
        	'lastName' => $faker->lastName(),
            'email' => $faker->email(),
            'password' => bcrypt('test')
        ]);

        $user = User::create([
        	'firstName' => $faker->firstName(),
        	'lastName' => $faker->lastName(),
            'email' => $faker->email(),
            'password' => bcrypt('test')
        ]);
    }
}
