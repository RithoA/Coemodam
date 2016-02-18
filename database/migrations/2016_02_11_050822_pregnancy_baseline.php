<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PregnancyBaseline extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create ('pregnancy_baseline', function(Blueprint $table){

            $table->increments('id');
            $table->string('clinician_surname');
            $table->string('clinician_firstname');
            $table->integer('clinician_mobile');
            $table->date('date_visit');
            $table->string('cem_id');
            $table->integer('weight');
            $table->date('art_commence');
            $table->date('last_lmp');
            $table->date('first_movements');
            $table->string('pregnancy_anc');
            $table->string('anc_name') ->nullable();
            $table->integer('trimester_art');
            $table->integer('gestation');
            $table->integer('past_pg');
            $table->integer('live_babies')->nullable();
            $table->string('abnormalities_pg')->nullable();
            $table->date('abnormalities_onset');
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
