<?php

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
            $table->increments('dis_id');
            $table->integer('case_ref')->unsigned();
            $table->foreign('case_ref')->references('case_id')->on('patient_cases')->onDelete('cascade')->onUpdate('cascade');
            $table->string('dispensed_drug_code');
            $table->foreign('dispensed_drug_code')->references('drug_code')->on('inventories')->onDelete('cascade')->onUpdate('cascade');
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
