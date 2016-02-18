<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArtInitiation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create ('art_initiation', function(Blueprint $table){

            $table->increments('id');
            $table->string('clinician_surname');
            $table->string('clinician_firstname');
            $table->integer('clinician_mobile');
            $table->date('date_visit');
            $table->string('cem_id');
            $table->integer('weight');
            $table->integer('height');
            $table->float('bmi');
            $table->integer('z_score')->nullable();
            $table->date('last_lmp')->nullable();
            $table->string('new_pregnant')->nullable();
            $table->integer('trimester')->nullable();
            $table->string('breastfeeding')->nullable();
            $table->integer('infant_age')->nullable();
            $table->string('who_stage');
            $table->string('filled_by');
            $table->integer('filled_mobile');
            $table->date('next_appointment');


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
