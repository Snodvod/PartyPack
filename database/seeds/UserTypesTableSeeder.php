<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Type;

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

        Type::truncate();

        $userType = Type::create([
        	'name' => 'admin'
        ]);

        $userType = Type::create([
        	'name' => 'artist'
        ]);

        $userType = Type::create([
        	'name' => 'user'
        ]);
    }
}
