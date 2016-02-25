<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePatient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient', function (Blueprint $table) {
            $table->increments('pt_regno');
            $table->string('pt_ic');
            $table->string('pt_name');
            $table->string('pt_contactNo');
            $table->date('pt_dob');
            $table->string('pt_gender');
            $table->string('pt_panel'); 
            $table->string('pt_race');
            $table->string('pt_address');
            $table->string('pt_city');
            $table->integer('pt_postcode');
            $table->string('pt_state');
            $table->timestamps('pt_dateRegistered');
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
