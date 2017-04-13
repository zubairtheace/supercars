<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFooterOpeningHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('footer_opening_hours', function (Blueprint $table) {
        $table->increments('id');
        $table->string('week_day');
        $table->string('week_time');
        $table->string('week_end_day');
        $table->string('week_end_time');
        $table->timestamps();
        $table->softDeletes();
      });

      $data = array(
          "week_day"=>"Monday - Thursday",
          "week_time"=>"9.00 - 16.00",
          "week_end_day"=>"Saturdays & Public Holidays",
          "week_end_time"=>"9.00 - 18.00"
      );

      DB::table('footer_opening_hours')->insert(array($data));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('footer_opening_hours');
    }
}
