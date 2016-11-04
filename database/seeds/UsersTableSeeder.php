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

        User::create([
            'name' => "Eek-a-mouse",
            'email' => $faker->email(),
            'password' => bcrypt('secret')
        ]);

        User::create([
        	'name' => 'Dynamo',
            'email' => $faker->email(),
            'password' => bcrypt('secret')
        ]);

        User::create([
            'name' => 'Ozomatli',
            'email' => $faker->email(),
            'password' => bcrypt('secret')
        ]);
        User::create([
            'name' => 'Netwerk',
            'email' => $faker->email(),
            'password' => bcrypt('secret')
        ]);
    }
}
