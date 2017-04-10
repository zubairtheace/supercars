<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsMakeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('makes', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->timestamps();
      });

        $data1 = array("name"=>"BMW");
        $data2 = array("name"=>"Mercedes-Benz");
        $data3 = array("name"=>"Porsche");
        $data4 = array("name"=>"Ferrari");
        $data5 = array("name"=>"Aston Martin");
        $data6 = array("name"=>"Rolls-Royce");
        $data7 = array("name"=>"Maserati");
        $data8 = array("name"=>"Toyota");
        $data9 = array("name"=>"Tesla");
        $data10 = array("name"=>"Lexus");
        $data11 = array("name"=>"Bugatti");
        $data12 = array("name"=>"Bentley");
        $data13 = array("name"=>"Volvo");
        $data14 = array("name"=>"Ford");
        $data15 = array("name"=>"Honda");
        $data16 = array("name"=>"Volkswagen");
        $data17 = array("name"=>"Subaru");
        $data18 = array("name"=>"Alfa Romeo");
        $data19 = array("name"=>"Pagani");
        $data20 = array("name"=>"Chevrolet");
        $data21 = array("name"=>"Cadillac");
        $data22 = array("name"=>"Jeep");
        $data23 = array("name"=>"Pontiac");
        $data24 = array("name"=>"Chrysler");
        $data25 = array("name"=>"Chrysler");
        DB::table('makes')->insert(array($data1,$data2,$data3,$data4,$data5,$data6,$data7,$data8,$data9,$data10,$data11,$data12,$data13,$data14,$data15,$data16,$data17,$data18,$data19,$data20,$data21,$data22,$data23,$data24,$data25));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('makes');
    }
}
