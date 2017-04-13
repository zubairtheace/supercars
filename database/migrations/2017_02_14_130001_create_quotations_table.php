<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('quotations', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->integer('car_id')->unsigned();
        $table->integer('user_id')->unsigned();
        $table->text('message');
        $table->foreign('car_id')->references('id')->on('cars');
        $table->foreign('user_id')->references('id')->on('users');
        $table->timestamps();
        $table->softDeletes();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotations');
    }
}
