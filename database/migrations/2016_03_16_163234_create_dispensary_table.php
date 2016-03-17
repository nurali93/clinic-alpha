22<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDispensaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispensary', function (Blueprint $table){
            $table->increments('id');
            $table->integer('case_ref')->unsigned();
            $table->foreign('case_ref')->references('id')->on('patient_cases')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('dispensed_drug_code')->unsigned();
            $table->foreign('dispensed_drug_code')->references('id')->on('inventories')->onDelete('cascade')->onUpdate('cascade');
            $table->string('remarks');
            $table->string('dispensed_quantity');
            $table->float('price_per_unit');
            $table->float('total_price_sold');
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
