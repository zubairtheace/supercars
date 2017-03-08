<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cars', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('make_id')->unsigned();
        $table->integer('color_id')->unsigned();
        $table->string('model');
        $table->string('type');
        $table->date('year');
        $table->integer('engine_capacity');
        $table->string('transmission');
        $table->integer('mileage');
        $table->float('price', 10, 2);
        $table->text('picture');
        $table->foreign('make_id')->references('id')->on('makes');
        $table->foreign('color_id')->references('id')->on('colors');
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
        Schema::dropIfExists('cars');
    }
}
