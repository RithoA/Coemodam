<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Healthworkers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create ('healthworkers', function(Blueprint $table){

            $table->increments('id');
            $table->string('hw_surname');
            $table->string('hw_firstname');
            $table->integer('eligibilityform_id')->unsigned();
            
          
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
