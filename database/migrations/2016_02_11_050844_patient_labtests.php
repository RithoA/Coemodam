<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PatientLabtests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create ('patient_labtests', function(Blueprint $table){

            $table->increments('id');
            $table->string('cem_id');
            $table->string('test_name');
            $table->date('test_date');
            $table->string('test_result')->nullable();
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
