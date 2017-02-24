<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestDriveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('test_drives', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->string('email');
        $table->string('name');
        $table->integer('phone_number');
        $table->date('date_of_appointment');
        $table->dateTime('time_of_appointment');
        $table->text('message');
        $table->foreign('cars_id')->references('id')->on('cars');
        $table->foreign('users_id')->references('id')->on('users');
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
        Schema::dropIfExists('test_drives');
    }
}
