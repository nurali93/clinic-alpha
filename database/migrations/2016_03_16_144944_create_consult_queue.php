<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultQueue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consult_queue', function (Blueprint $table) {
            $table->increments('id');
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
        Schema::drop('consult_queue');
    }
}
