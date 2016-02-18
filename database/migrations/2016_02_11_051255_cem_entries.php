<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CemEntries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create ('cem_entries', function(Blueprint $table){

            $table->increments('id');
            $table->integer('cem_entryno')->unsigned();
            $table->string('hrio_email');
            $table->integer('fac_id')->unsigned();
            $table->datetime('entry');
           
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
