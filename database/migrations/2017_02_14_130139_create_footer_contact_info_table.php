<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFooterContactInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('footer_contact_infos', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('phone_number');
        $table->string('email');
        $table->timestamps();
        $table->softDeletes();
      });

        $data = array(
            "phone_number"=>"4556677",
            "email"=>"contact@supercars.com"
        );

        DB::table('footer_contact_infos')->insert(array($data));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('footer_contact_infos');
    }
}
