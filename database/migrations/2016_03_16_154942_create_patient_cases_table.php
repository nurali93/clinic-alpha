<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_cases', function (Blueprint $table){
            $table->increments('case_id');
            $table->integer('pt_id')->unsigned();
            $table->foreign('pt_id')->references('id')->on('patients')->onDelete('cascade')->onUpdate('cascade');
            $table->string('diagnosis');
            $table->string('resource_directory');
            $table->integer('dr_id')->unsigned();
            $table->foreign('dr_id')->references('staff_id')->on('staff')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patient_cases');
    }
}
