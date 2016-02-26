<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeddingservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weddingservices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('halltype');
            $table->string('advancepayment');
            $table->string('minimumpax');
            $table->string('additionalhour');
            $table->string('fullpayment');
            $table->string('corkage');
            $table->string('beerlocal');
            $table->string('icedcoffee');
            $table->string('cutlery');
            $table->string('remember_token')->nullable();
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
        Schema::drop('weddingservices');
    }
}
