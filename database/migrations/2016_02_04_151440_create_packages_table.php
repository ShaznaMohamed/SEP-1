<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages',function(Blueprint $table){
            $table->increments('id');
            $table->string('package_name');
            $table->string('package_type');
            $table->string('price');
            $table->string('descript');
            $table->string('start_date');
            $table->string('end_date');
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
         Schema::drop('packages');
    }
}
