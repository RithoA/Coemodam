<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
  Schema::create ('facilities', function(Blueprint $table){

            $table->increments('fac_id');
            $table->string('fac_name');
            $table->integer('county_id')->unsigned();
            

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
    }
}
