<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panels', function (Blueprint $table) {
            $table->increments('id');

            $table->string('p_code');
            $table->string('p_company');
            $table->string('p_contactname');
            $table->string('p_telno');
            $table->string('p_ext');
            $table->string('p_fax');
            $table->string('p_email');
            $table->string('p_address');
            $table->string('p_city');
            $table->string('p_postcode');
            $table->string('p_state');
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
        Schema::drop('panels');
    }
}
