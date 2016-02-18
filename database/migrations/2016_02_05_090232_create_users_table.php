<?php

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

    //
    Schema::create ('users', function(Blueprint $table){

            $table->increments('id');
            $table->string('surname');
            $table->string('other_names');
            $table->string('org');
            $table->string('user_type');
            $table->integer('mobile')->unique();
            $table->string('email')->unique();
            $table->integer('county_id')->unsigned()->nullable();;
            $table->integer('fac_id')->unsigned()->nullable();;
            $table->string('password',60);
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
        //
        Schema::drop('users');
    }
}