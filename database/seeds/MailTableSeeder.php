<?php

use Illuminate\Database\Seeder;
use App\Mail;

class MailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mail::create([
            'secret' => bcrypt('test')
        ]);
    }
}
