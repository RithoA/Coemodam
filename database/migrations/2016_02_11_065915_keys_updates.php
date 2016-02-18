<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KeysUpdates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
            $table->foreign('county_id')->references('county_id')->on('counties');
            $table->foreign('fac_id')->references('fac_id')->on('facilities');
        });

        Schema::table('facilities', function(Blueprint $table){

            $table->foreign('county_id')->references('county_id')->on('counties');
        });

        Schema::table('cem_entries', function($table) {
            $table->foreign('cem_entryno')->references('id')->on('cem_registry');
            $table->foreign('hrio_email')->references('email')->on('users');
            $table->foreign('fac_id')->references('fac_id')->on('facilities');
        });

        Schema::table('healthworkers', function($table) {
            $table->foreign('eligibilityform_id')->references('id')->on('cem_registry');
        });

        Schema::table('baseline_questionnaire', function($table) {
            $table->foreign('county_id')->references('county_id')->on('counties');
            $table->foreign('fac_id')->references('fac_id')->on('facilities');
            $table->foreign('cem_id')->references('cem_id')->on('cem_registry');

        });

        Schema::table('art_initiation', function($table) {

            $table->foreign('cem_id')->references('cem_id')->on('cem_registry');

        });

        Schema::table('art_followup', function($table) {

            $table->foreign('cem_id')->references('cem_id')->on('cem_registry');

        });

        Schema::table('patient_drugs', function($table) {

            $table->foreign('cem_id')->references('cem_id')->on('cem_registry');

        });

        Schema::table('patient_art_drugs', function($table) {

            $table->foreign('cem_id')->references('cem_id')->on('cem_registry');

        });

        Schema::table('patient_diseases', function($table) {

            $table->foreign('cem_id')->references('cem_id')->on('cem_registry');

        });
        Schema::table('patient_labtests', function($table) {

            $table->foreign('cem_id')->references('cem_id')->on('cem_registry');

        });

        Schema::table('pregnancy_baseline', function($table) {

            $table->foreign('cem_id')->references('cem_id')->on('cem_registry');

        });

        Schema::table('pregnancy_progress', function($table) {

            $table->foreign('cem_id')->references('cem_id')->on('cem_registry');

        });

        Schema::table('pregnancy_outcome', function($table) {

            $table->foreign('cem_id')->references('cem_id')->on('cem_registry');

        });

        Schema::table('events', function($table) {

            $table->foreign('cem_id')->references('cem_id')->on('cem_registry');

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
