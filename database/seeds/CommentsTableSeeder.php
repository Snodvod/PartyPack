<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('nl_BE');

        Comment::truncate();

        Comment::create([
        	'description' => $faker->text(),
        	'rating' => $faker->randomDigitNotNull(),
            'party_id' => 1,
            'commentable_id' => 3,
            'commentable_type' => 'App\User'
        
        ]);

        Comment::create([
        	'description' => $faker->text(),
        	'rating' => $faker->randomDigitNotNull(),
            'party_id' => 2,
            'commentable_id' => 3,
            'commentable_type' => 'App\Party'
        ]);

        Comment::create([
        	'description' => $faker->text(),
        	'rating' => $faker->randomDigitNotNull(),
            'party_id' => 2,
            'commentable_id' => 1,
            'commentable_type' => 'App\Party'
        ]);
    }
}
