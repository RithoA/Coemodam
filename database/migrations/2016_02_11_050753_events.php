<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Events extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create ('events', function(Blueprint $table){

            $table->increments('id');
            $table->string('cem_id');
            $table->date('onset_date');
            $table->string('severity');
            $table->string('outcome');
            $table->string('rechallenge')->nullable();
            $table->string('rechallenge_response')->nullable();

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
