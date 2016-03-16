<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDispensaryQueue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispensary_queue', function (Blueprint $table) {
            $table->increments('q_no');
            $table->integer('pt_id')->unsigned();
            $table->foreign('pt_id')->references('id')->on('patients')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->string('status'); 
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
        Schema::drop('dispensary_queue');
    }
}
