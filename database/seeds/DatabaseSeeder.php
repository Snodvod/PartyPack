<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Model::unguard();

        $this->call('UsersTableSeeder');
        $this->call('CommentsTableSeeder');
        $this->call('PartiesTableSeeder');
        $this->call('UserTypesTableSeeder');
        // $this->call('UserOccupationsTableSeeder');
        $this->call('OccupationsTableSeeder');
        $this->call('MailTableSeeder');
        $this->call('ImagesTableSeeder');

        Model::reguard();
    }

    private function clear_tables() {
        \App\User::truncate();
        \App\Comment::truncate();
        \App\Event::truncate();
        \App\Occupation::truncate();
        \App\Party::truncate();
        \App\UserEvent::truncate();
        \App\UserOccupation::truncate();
        \App\Type::truncate();
        DB::table('tblUserEvent')->truncate();
        DB::table('tblUserOccupation')->truncate();
    }
}
