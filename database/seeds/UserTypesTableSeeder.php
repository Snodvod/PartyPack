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

        Type::create([
        	'name' => 'admin'
        ]);

        Type::create([
        	'name' => 'artist'
        ]);

        Type::create([
        	'name' => 'user'
        ]);
    }
}
