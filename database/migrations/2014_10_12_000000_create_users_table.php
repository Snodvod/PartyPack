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
            $table->foreign('type_id')->references('id')->on('tblUserType')->onDelete('cascade');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });

        Schema::create('tblUserEvent', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index()->default(0);
            $table->integer('event_id')->unsigned()->index()->default(0);
        });

        Schema::table('tblUserEvent', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('tblUser')->onDelete('cascade');
            $table->foreign('event_id')->references('id')->on('tblEvent')->onDelete('cascade');
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
        Schema::drop('tblUsers');
        Schema::drop('tblUserEvent');
    }
}
