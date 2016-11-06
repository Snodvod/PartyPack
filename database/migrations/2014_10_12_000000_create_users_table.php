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
            $table->integer('type_id')->unsigned()->index()->default('0');
            $table->foreign('type_id')->references('id')->on('tblType')->onDelete('cascade');
            $table->integer('mail_id')->unsigned()->index()->default('0');
            $table->foreign('mail_id')->references('id')->on('tblMail')->onDelete('cascade');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('bio')->nullable();
            $table->rememberToken();
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
        Schema::drop('tblUser');
    }
}
