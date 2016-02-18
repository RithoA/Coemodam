<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PatientArtDrugs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create ('patient_art_drugs', function(Blueprint $table){

            $table->increments('id');
            $table->string('cem_id');
            $table->date('date_stopped');
            $table->string('reason');
            $table->date('date_restarted')->nullable();
            $table->date('date_entry');


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
