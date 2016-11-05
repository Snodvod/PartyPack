<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPartyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblUserParty', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index()->default(0);
            $table->integer('party_id')->unsigned()->index()->default(0);
        });

        Schema::table('tblUserParty', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('tblUser')->onDelete('cascade');
            $table->foreign('party_id')->references('id')->on('tblParty')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tblUserParty');
    }
}
