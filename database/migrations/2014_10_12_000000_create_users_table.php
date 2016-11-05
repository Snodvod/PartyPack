<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblUser', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id')->unsigned()->index()->default(0);
            $table->foreign('type_id')->references('id')->on('tblType')->onDelete('cascade');
            $table->integer('mail_id')->unsigned()->index()->default(0);
            $table->foreign('mail_id')->references('id')->on('tblMail')->onDelete('cascade');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('bio')->nullable();
            $table->timestamps();
        });

        Schema::create('tblUserParty', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index()->default(0);
            $table->integer('party_id')->unsigned()->index()->default(0);
        });

        Schema::table('tblUserParty', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('tblUser')->onDelete('cascade');
            $table->foreign('party_id')->references('id')->on('tblParty')->onDelete('cascade');
        });

        Schema::create('tblUserOccupation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index()->default(0);
            $table->integer('occupation_id')->unsigned()->index()->default(0);
        });

        Schema::table('tblUserOccupation', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('tblUser')->onDelete('cascade');
            $table->foreign('occupation_id')->references('id')->on('tblOccupation')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tblUserOccupation');
        Schema::drop('tblUser');
    }
}
