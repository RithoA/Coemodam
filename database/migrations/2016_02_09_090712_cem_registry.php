<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CemRegistry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create ('cem_registry', function(Blueprint $table){

            $table->increments('id');
            $table->string('gender');
            $table->date('dob');
            $table->integer('patient_no')->unique();
            $table->date('cem_screening');
            $table->string('cem_outcome');
            $table->boolean('enrolled');
            $table->string('cem_id')->unique()->nullable();;
            $table->string('reason_nonenroll')->nullable();
            $table->string('cem_endpoint')->nullable();
            $table->date('cem_enddate');
            $table->integer('facility_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cem_registry');
    }
}