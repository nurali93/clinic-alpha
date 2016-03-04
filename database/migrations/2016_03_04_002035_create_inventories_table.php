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

            $table->string('drug_code');
            $table->string('drug_name');
            $table->integer('drug_stock');
            $table->integer('drug_lowlimit');
            $table->string('drug_type');
            $table->string('drug_remarks');
            $table->string('drug_precaution');
            $table->date('dateOfPurchase');
            $table->date('dateOfExpiry');
            $table->string('drug_supplier');
            $table->string('intakeTime');
            $table->string('frequency');
            $table->integer('dispenseQuantity');
            $table->float('spu');
            $table->integer('unitsInPack');
            $table->engine = 'InnoDB';

            $table->timestamps();
        });

        Schema::table('inventories', function($table){
            $table->foreign('drug_supplier')
                  ->references('supp_id')->on('suppliers')
                  ->onDelete('cascade')->onUpdate('cascade');
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
