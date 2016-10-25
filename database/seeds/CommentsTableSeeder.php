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

        $comment = Comment::create([
        	'description' => $faker->text(),
        	'rating' => $faker->randomDigitNotNull()
        ]);

        $comment = Comment::create([
        	'description' => $faker->text(),
        	'rating' => $faker->randomDigitNotNull()
        ]);

        $comment = Comment::create([
        	'description' => $faker->text(),
        	'rating' => $faker->randomDigitNotNull()
        ]);
    }
}
