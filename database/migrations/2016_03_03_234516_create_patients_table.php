<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            // $table->increments('pt_regno');
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
            $table->engine = 'InnoDB';
            
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
        Schema::drop('patients');
    }
}
