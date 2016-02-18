<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BaselineQuestionnaire extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create ('baseline_questionnaire', function(Blueprint $table){

            $table->increments('id');
            $table->integer('county_id')->unsigned();
            $table->integer('fac_id')->unsigned();
            $table->string('clinician_surname');
            $table->string('clinician_firstname');
            $table->integer('clinician_mobile');
            $table->date('date_visit');
            $table->string('cem_id');
            $table->string('gender');
            $table->date('date_birth');
            $table->integer('patient_no')->unique();
            $table->integer('weight');
            $table->integer('height');
            $table->float('bmi');
            $table->integer('z_score')->nullable();
            $table->string('address')->nullable();
            $table->integer('client_mobile1')->nullable();
            $table->integer('client_mobile2')->nullable();
            $table->string('who_stage');
            $table->date('last_lmp')->nullable();
            $table->string('pregnant')->nullable();
            $table->integer('trimester')->nullable();
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
