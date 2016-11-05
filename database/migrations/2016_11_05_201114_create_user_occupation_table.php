<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserOccupationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
    }
}
