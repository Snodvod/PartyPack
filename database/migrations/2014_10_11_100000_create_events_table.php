<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblEvent', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comment_id')->unsigned()->index()->default(0);
            $table->foreign('comment_id')->references('id')->on('tblComment')->onDelete('cascade');
            $table->integer('party_id')->unsigned()->index()->default(0);
            $table->foreign('party_id')->references('id')->on('tblParty')->onDelete('cascade');
            $table->string('location');
            $table->integer('price');
            $table->datetime('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblEvent');
    }
}
