<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room', function (Blueprint $table) {
            $table->increments('id');
            $table->string('roomtype');
            $table->string('price');
            $table->boolean('wifi')->default(1);
            $table->boolean('airconditioned')->default(1);
            $table->boolean('cabletv')->default(1);
            $table->boolean('telephone')->default(1);
            $table->boolean('diningtable')->default(1);
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
        Schema::drop('room');
    }
}
