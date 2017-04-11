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
        $table->integer('year');
        $table->integer('engine_capacity');
        $table->string('transmission');
        $table->integer('mileage');
        $table->float('price', 10, 2);
        $table->text('picture');
        $table->foreign('make_id')->references('id')->on('makes');
        $table->foreign('color_id')->references('id')->on('colors');
        $table->timestamps();
      });

      $data1 = array(
          "make_id"=>"1",
          "color_id"=>"3",
          "model"=>"I8",
          "type"=>"new",
          "year"=>"2017",
          "engine_capacity"=>"1450",
          "transmission"=>"automatic",
          "mileage"=>"0",
          "price"=>"129000",
          "picture"=>"1491925371.jpg"
      );

      $data2 = array(
          "make_id"=>"2",
          "color_id"=>"4",
          "model"=>"Maybach S600",
          "type"=>"reconditionned",
          "year"=>"2015",
          "engine_capacity"=>"1950",
          "transmission"=>"automatic",
          "mileage"=>"6000",
          "price"=>"100000",
          "picture"=>"1491931151.jpg"
      );

      $data3 = array(
          "make_id"=>"3",
          "color_id"=>"17",
          "model"=>"panamera",
          "type"=>"new",
          "year"=>"2017",
          "engine_capacity"=>"1250",
          "transmission"=>"manual",
          "mileage"=>"0",
          "price"=>"1239500",
          "picture"=>"1491931385.jpg"
      );

      $data4 = array(
          "make_id"=>"4",
          "color_id"=>"10",
          "model"=>"206 GT",
          "type"=>"reconditionned",
          "year"=>"2015",
          "engine_capacity"=>"2200",
          "transmission"=>"automatic",
          "mileage"=>"13000",
          "price"=>"104000",
          "picture"=>"1491931581.jpg"
      );

      $data5 = array(
          "make_id"=>"5",
          "color_id"=>"6",
          "model"=>"v8 vantage",
          "type"=>"new",
          "year"=>"2016",
          "engine_capacity"=>"1400",
          "transmission"=>"automatic",
          "mileage"=>"14000",
          "price"=>"104500",
          "picture"=>"1491931733.jpg"
      );

      $data6 = array(
          "make_id"=>"6",
          "color_id"=>"7",
          "model"=>"Dawn",
          "type"=>"new",
          "year"=>"2017",
          "engine_capacity"=>"1350",
          "transmission"=>"automatic",
          "mileage"=>"0",
          "price"=>"103500",
          "picture"=>"1491932102.jpg"
      );

      $data7 = array(
          "make_id"=>"7",
          "color_id"=>"7",
          "model"=>"Quatroporte",
          "type"=>"reconditionned",
          "year"=>"2011",
          "engine_capacity"=>"1250",
          "transmission"=>"manual",
          "mileage"=>"13000",
          "price"=>"101000",
          "picture"=>"1491932253.jpg"
      );

      $data8 = array(
          "make_id"=>"8",
          "color_id"=>"9",
          "model"=>"Ax10",
          "type"=>"reconditionned",
          "year"=>"2007",
          "engine_capacity"=>"1050",
          "transmission"=>"manual",
          "mileage"=>"17000",
          "price"=>"101000",
          "picture"=>"1491932422.png"
      );

      $data9 = array(
          "make_id"=>"9",
          "color_id"=>"5",
          "model"=>"S",
          "type"=>"new",
          "year"=>"2017",
          "engine_capacity"=>"2500",
          "transmission"=>"manual",
          "mileage"=>"24000",
          "price"=>"106000",
          "picture"=>"1491932576.jpg"
      );

      $data10 = array(
          "make_id"=>"17",
          "color_id"=>"10",
          "model"=>"Impreza",
          "type"=>"new",
          "year"=>"2017",
          "engine_capacity"=>"2050",
          "transmission"=>"manual",
          "mileage"=>"29000",
          "price"=>"110500",
          "picture"=>"1491932704.jpg"
      );

      $data11 = array(
          "make_id"=>"14",
          "color_id"=>"15",
          "model"=>"Mustang",
          "type"=>"new",
          "year"=>"2013",
          "engine_capacity"=>"1600",
          "transmission"=>"automatic",
          "mileage"=>"15000",
          "price"=>"106000",
          "picture"=>"1491932892.png"
      );

      $data12 = array(
          "make_id"=>"15",
          "color_id"=>"2",
          "model"=>"X6",
          "type"=>"reconditionned",
          "year"=>"2016",
          "engine_capacity"=>"1550",
          "transmission"=>"manual",
          "mileage"=>"15000",
          "price"=>"108000",
          "picture"=>"1491932996.png"
      );

      $data13 = array(
          "make_id"=>"20",
          "color_id"=>"4",
          "model"=>"Equinox",
          "type"=>"new",
          "year"=>"2017",
          "engine_capacity"=>"2650",
          "transmission"=>"manual",
          "mileage"=>"29000",
          "price"=>"111000",
          "picture"=>"1491933077.jpg"
      );

      $data14 = array(
          "make_id"=>"18",
          "color_id"=>"6",
          "model"=>"4c coupes",
          "type"=>"new",
          "year"=>"2017",
          "engine_capacity"=>"2500",
          "transmission"=>"automatic",
          "mileage"=>"34000",
          "price"=>"108000",
          "picture"=>"1491933178.jpg"
      );

      $data15 = array(
          "make_id"=>"16",
          "color_id"=>"4",
          "model"=>"Jetta",
          "type"=>"new",
          "year"=>"2016",
          "engine_capacity"=>"1400",
          "transmission"=>"manual",
          "mileage"=>"13000",
          "price"=>"107000",
          "picture"=>"1491933280.jpg"
      );

      DB::table('cars')->insert(array($data1,$data2,$data3,$data4,$data5,$data6,$data7,$data8,$data9,$data10,$data11,$data12,$data13,$data14,$data15));
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
