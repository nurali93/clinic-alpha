<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePanel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panel', function (Blueprint $table) {
            $table->string('p_code')->primary();
            $table->string('p_company');
            $table->string('p_contactname');
            $table->string('p_telno');
            $table->string('p_ext');
            $table->string('p_fax');
            $table->string('p_email');
            $table->string('p_address');
            $table->string('p_city');
            $table->string('p_postcode');
            $table->string('p_state');
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
