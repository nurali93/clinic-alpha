<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('supp_id');
            $table->string('supp_name');
            $table->string('supp_contactName');
            $table->string('supp_billAddress');
            $table->string('supp_city');
            $table->string('supp_state');
            $table->string('supp_postcode');
            $table->string('supp_phoneNo');
            $table->string('supp_faxNo');
            $table->string('supp_email');
            $table->string('supp_altNo');
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
        Schema::drop('suppliers');
    }
}
