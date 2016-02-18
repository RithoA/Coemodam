<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PregnancyOutcome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create ('pregnancy_outcome', function(Blueprint $table){

            $table->increments('id');
            $table->string('cem_id');
            $table->string('delivery_place');
            $table->string('patientno_delivery')->nullable();
            $table->string('contact_delivery')->nullable();
            $table->string('art_delivery');
            $table->string('arvs')->nullable();
            $table->date('delivery_date');
            $table->string('miscarriage');
            $table->date('miscarriage_date');
            $table->string('abnormalities_pg');
            $table->string('abnormalities_labour');
            $table->string('abnormalities_baby');
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
