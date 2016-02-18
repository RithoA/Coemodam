<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PatientDiseases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create ('patient_diseases', function(Blueprint $table){

            $table->increments('id');
            $table->string('cem_id');
            $table->integer('year_start');
            $table->integer('year_end')->nullable();
            $table->string('disease_name');
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
