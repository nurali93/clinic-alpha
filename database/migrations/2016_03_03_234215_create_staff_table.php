<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            //$table->increments('id');

            $table->increments('staff_id');
            $table->string('staff_name');
            $table->string('position');
            $table->string('staff_telno');
            $table->date('dateHired');
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
        Schema::drop('staff');
    }
}
