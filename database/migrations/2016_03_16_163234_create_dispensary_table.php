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
        Schema::create('dispensaries', function (Blueprint $table){
            $table->increments('id');
            $table->integer('case_ref');
            $table->string('dispensed_drug_code');
            $table->string('remarks');
            $table->string('dispensed_quantity');
            $table->float('price_per_unit');
            $table->float('total_price_sold');
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
        //
    }
}
