<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSupplier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
        $table->string('s_id')->primary();
        $table->string('s_name');
        $table->string('s_contactName');
        $table->string('s_billAddress');
        $table->string('s_city');
        $table->string('s_state');
        $table->string('s_postcode');
        $table->string('s_phoneNo');
        $table->string('s_faxNo');
        $table->string('s_email');
        $table->string('s_altNo');
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
