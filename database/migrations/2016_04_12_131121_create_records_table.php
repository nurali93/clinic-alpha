<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table){
            $table->increments('id');
            $table->integer('pt_id')->unsigned();
            $table->foreign('pt_id')->references('id')->on('patients')->onDelete('cascade')->onUpdate('cascade');
            $table->string('diagnosis');
            $table->string('treatment');
            $table->string('pres_med');
            $table->string('dispenseQuantity');
            $table->string('attachment_loc');
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
        Schema::drop('records');
    }
}
