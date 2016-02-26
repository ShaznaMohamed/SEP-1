<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Testimonials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('testimonials', function (Blueprint $table) {
          $table->increments('testimonialsid');
          $table->string('email');
          $table->string('name');
          $table->string('location');
          $table->string('title');
          $table->string('message');
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
        //
    }
}
