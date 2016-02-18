<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PregnancyProgress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create ('pregnancy_progress', function(Blueprint $table){

            $table->increments('id');
            $table->string('clinician_surname');
            $table->string('clinician_firstname');
            $table->integer('clinician_mobile');
            $table->date('date_visit');
            $table->string('cem_id');
            $table->integer('weight');
            $table->string('anc_name')->nullable();
            $table->integer('gestation');
            $table->string('abnormalities_pg');
            $table->date('abnormalities_onset');
            $table->string('baby_born');
            $table->string('baby_birthplace');
            $table->date('baby_dob');
            $table->string('miscarriage');
            $table->date('miscarriage_date');
            $table->string('filled_by');
            $table->integer('filled_mobile');
            $table->date('filled_date');
            $table->date('anc_next');


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
