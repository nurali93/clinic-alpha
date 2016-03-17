<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('drug_name');
            $table->integer('drug_stock');
            $table->integer('drug_lowlimit');
            $table->string('drug_type');
            $table->string('drug_remarks');
            $table->string('drug_precaution');
            $table->date('dateOfPurchase');
            $table->date('dateOfExpiry');
            $table->integer('drug_supplier')->unsigned();
            $table->foreign('drug_supplier')->references('id')->on('suppliers')->onDelete('cascade')->onUpdate('cascade');
            $table->string('supp_id');
            $table->string('intakeTime');
            $table->string('frequency');
            $table->integer('dispenseQuantity');
            $table->float('spu');
            $table->integer('unitsInPack');
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
        Schema::drop('inventories');
    }
}
