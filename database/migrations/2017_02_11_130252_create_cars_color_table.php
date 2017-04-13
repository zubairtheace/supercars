<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsColorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('colors', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->timestamps();
        $table->softDeletes();
      });

      $data1 = array("name"=>"Red");
      $data2 = array("name"=>"Black");
      $data3 = array("name"=>"Blue");
      $data4 = array("name"=>"Yellow");
      $data5 = array("name"=>"Orange");
      $data6 = array("name"=>"Green");
      $data7 = array("name"=>"Dark-Blue");
      $data8 = array("name"=>"Dark-Green");
      $data9 = array("name"=>"Grey");
      $data10 = array("name"=>"Indigo");
      $data11 = array("name"=>"Ivory");
      $data12 = array("name"=>"Brown");
      $data13 = array("name"=>"Purple");
      $data14 = array("name"=>"Royal-Blue");
      $data15 = array("name"=>"Sea-Green");
      $data16 = array("name"=>"Sky-blue");
      $data17 = array("name"=>"White");
      $data18 = array("name"=>"Teal");
      $data19 = array("name"=>"Aqua");
      $data20 = array("name"=>"Midnight-Blue");
      $data21 = array("name"=>"Cadillac");
      $data22 = array("name"=>"Forest-Green");
      $data23 = array("name"=>"Turquoise");
      $data24 = array("name"=>"Sienna");
      $data25 = array("name"=>"Chocolate");
      DB::table('colors')->insert(array($data1,$data2,$data3,$data4,$data5,$data6,$data7,$data8,$data9,$data10,$data11,$data12,$data13,$data14,$data15,$data16,$data17,$data18,$data19,$data20,$data21,$data22,$data23,$data24,$data25));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colors');
    }
}
