<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWedreservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wedreservation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone', 10);
            $table->string('pax');
            $table->string('arrival');
            $table->string('departure');
            $table->string('halltype');
            $table->string('message');
            $table->string('sessionn');
            $table->string('flexibility');
            $table->string('remember_token')->nullable();
            $table->timestamps();
        });

//        Schema::table('wedreservation', function ($table) {
//            $table->string('sessionn');
//            $table->string('flexibility');
//         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('wedreservation');
    }



}
