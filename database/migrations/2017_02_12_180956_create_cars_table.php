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
        $table->string('model');
        $table->boolean('type');
        $table->date('year');
        $table->integer('engine_capacity');
        $table->boolean('transmission');
        $table->integer('mileage');
        $table->float('price', 10, 2);
        $table->text('picture');
        $table->foreign('car_make_id')->references('id')->on('car_make');
        $table->foreign('car_color_id')->references('id')->on('car_color');
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
