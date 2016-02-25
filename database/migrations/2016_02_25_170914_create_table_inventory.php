<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInventory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
        $table->string('drug_code')->primary();
        $table->string('drug_name');
        $table->integer('drug_stock');
        $table->integer('drug_lowlimit');
        $table->string('drug_type');
        $table->string('drug_remarks');
        $table->string('drug_precaution');
        $table->date('dateOfPurchase');
        $table->date('dateOfExpiry');
        $table->string('drug_supplier');
        $table->foreign('drug_supplier')->references('s_id')->on('supplier')->onDelete('cascade')->onUpdate('cascade');
        $table->string('intakeTime');
        $table->string('frequency');
        $table->integer('dispenseQuantity');
        $table->float('spu');
        $table->integer('unitsInPack');
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
