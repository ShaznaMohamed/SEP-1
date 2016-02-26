<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('dining',function(Blueprint $table){
          $table->increments('id');
          $table->string('title');
          $table->string('first_name');
          $table->string('last_name');
          $table->string('email');
          $table->integer('phone');
          $table->string('arrival_date');
          $table->string('arrival_time');
          $table->integer('arrival_adults');
          $table->integer('arrival_children');
          $table->string('notes');
          $table->string('type');
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
        Schema::drop('dining');
    }
}
?>
