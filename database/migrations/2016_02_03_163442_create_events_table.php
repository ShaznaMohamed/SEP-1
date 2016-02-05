<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events',function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('venue');
            $table->integer('pax');
            $table->string('contact-arrival');
            $table->string('start');
            $table->string('end');
            $table->integer('contact_number');
            $table->string('type_of_event');
            $table->string('preferred_time');
            $table->string('email');
            $table->string('confirm_email');
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
        Schema::drop('events');
    }
}
