<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_type')->default('registered');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('nic');
            $table->string('gender');
            $table->date('dob');
            $table->string('address');
            $table->integer('phone_number');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        $data1 = array(
            "user_type"=>"admin",
            "first_name"=>"Zubair",
            "last_name"=>"Tofy",
            "nic"=>"T1234567896541",
            "gender"=>"male",
            "dob"=>"2017-12-28",
            "Address"=>"Avenue Cardinal 5,Les Guibies, Pailles",
            "phone_number"=>"2860480",
            "email"=>"tofy.zubair@gmail.com",
            "password"=>bcrypt("123456")
        );

        $data2 = array(
            "user_type"=>"admin",
            "first_name"=>"Admin",
            "last_name"=>"Example",
            "nic"=>"D1444774455212",
            "gender"=>"male",
            "dob"=>"2016-11-30",
            "Address"=>"Phoenix",
            "phone_number"=>"2000147",
            "email"=>"admin@example.com",
            "password"=>bcrypt("123456")
        );

        $data3 = array(
            "user_type"=>"admin",
            "first_name"=>"Pierre",
            "last_name"=>"Rock",
            "nic"=>"P0022330011023",
            "gender"=>"male",
            "dob"=>"2014-01-28",
            "Address"=>"Plaisance",
            "phone_number"=>"2777774",
            "email"=>"pierre@rock.com",
            "password"=>bcrypt("123456")
        );

        $data4 = array(
            "user_type"=>"admin",
            "first_name"=>"Registered Candidate",
            "last_name"=>"Example",
            "nic"=>"J9998885556663",
            "gender"=>"male",
            "dob"=>"1999-11-30",
            "Address"=>"Rose Hill",
            "phone_number"=>"2000003",
            "email"=>"registeredcandidate@example.com",
            "password"=>bcrypt("123456")
        );

        $data5 = array(
            "user_type"=>"admin",
            "first_name"=>"Paul",
            "last_name"=>"Hitman",
            "nic"=>"H8786542656466",
            "gender"=>"male",
            "dob"=>"1997-04-28",
            "Address"=>"Beau Bassin",
            "phone_number"=>"2247960",
            "email"=>"paul@hitman.com",
            "password"=>bcrypt("123456")
        );

        $data6 = array(
            "user_type"=>"admin",
            "first_name"=>"Katie",
            "last_name"=>"Larmas",
            "nic"=>"K0036987452100",
            "gender"=>"female",
            "dob"=>"2017-11-14",
            "Address"=>"Coromandel",
            "phone_number"=>"2222110",
            "email"=>"katie@larmas.com",
            "password"=>bcrypt("123456")
        );

        $data7 = array(
            "user_type"=>"admin",
            "first_name"=>"Thea",
            "last_name"=>"Queen",
            "nic"=>"Q7894561228220",
            "gender"=>"female",
            "dob"=>"2017-11-28",
            "Address"=>"Triolet",
            "phone_number"=>"2000005",
            "email"=>"thea@queen.com",
            "password"=>bcrypt("123456")
        );

        $data8 = array(
            "user_type"=>"admin",
            "first_name"=>"Laurel",
            "last_name"=>"Lance",
            "nic"=>"L7569841230000",
            "gender"=>"female",
            "dob"=>"2017-11-28",
            "Address"=>"Plaine Des Papayes",
            "phone_number"=>"2860011",
            "email"=>"laurel@lance.com",
            "password"=>bcrypt("123456")
        );

        $data9 = array(
            "user_type"=>"admin",
            "first_name"=>"Moira",
            "last_name"=>"Steward",
            "nic"=>"S8525852014796",
            "gender"=>"female",
            "dob"=>"2017-11-28",
            "Address"=>"Bassin Blanc",
            "phone_number"=>"20022001",
            "email"=>"moira@steward.com",
            "password"=>bcrypt("123456")
        );

        $data10 = array(
            "user_type"=>"admin",
            "first_name"=>"Sara",
            "last_name"=>"Ghul",
            "nic"=>"S7777441102589",
            "gender"=>"female",
            "dob"=>"2017-11-28",
            "Address"=>"Riviere des Galets",
            "phone_number"=>"2860410",
            "email"=>"sara@ghul.com",
            "password"=>bcrypt("123456")
        );

        $data11 = array(
            "user_type"=>"registered",
            "first_name"=>"Interviewer",
            "last_name"=>"Example",
            "nic"=>"V1444774455212",
            "gender"=>"male",
            "dob"=>"2016-11-28",
            "Address"=>"Cite Valleji",
            "phone_number"=>"2000147",
            "email"=>"interviewer@example.com",
            "password"=>bcrypt("123456")
        );

        $data12 = array(
            "user_type"=>"registered",
            "first_name"=>"Registered",
            "last_name"=>"Example",
            "nic"=>"C1445632100000",
            "gender"=>"male",
            "dob"=>"2016-11-28",
            "Address"=>"Vacoas",
            "phone_number"=>"2000147",
            "email"=>"registered@example.com",
            "password"=>bcrypt("123456")
        );

        $data13 = array(
            "user_type"=>"registered",
            "first_name"=>"Peaufine",
            "last_name"=>"Lefils",
            "nic"=>"P88844455577774",
            "gender"=>"male",
            "dob"=>"2016-11-28",
            "Address"=>"Quatre Bornes",
            "phone_number"=>"2000147",
            "email"=>"peaufine@lefils.com",
            "password"=>bcrypt("123456")
        );

        $data14 = array(
            "user_type"=>"registered",
            "first_name"=>"Dev",
            "last_name"=>"Auroy",
            "nic"=>"D4445552221023",
            "gender"=>"male",
            "dob"=>"2016-11-28",
            "Address"=>"Phoenix",
            "phone_number"=>"2000147",
            "email"=>"dev@auroy.com",
            "password"=>bcrypt("123456")
        );

        $data15 = array(
            "user_type"=>"registered",
            "first_name"=>"Namin",
            "last_name"=>"Lam",
            "nic"=>"N5556669998887",
            "gender"=>"male",
            "dob"=>"2016-11-28",
            "Address"=>"La Laura",
            "phone_number"=>"2000147",
            "email"=>"namin@lam.com",
            "password"=>bcrypt("123456")
        );

        $data16 = array(
            "user_type"=>"registered",
            "first_name"=>"veena",
            "last_name"=>"Chillum",
            "nic"=>"C4565458521000",
            "gender"=>"female",
            "dob"=>"2016-11-28",
            "Address"=>"Pont Kolvil",
            "phone_number"=>"2000147",
            "email"=>"veena@chillum.com",
            "password"=>bcrypt("123456")
        );

        $data17 = array(
            "user_type"=>"registered",
            "first_name"=>"Shanna",
            "last_name"=>"Khabh",
            "nic"=>"K4587778963210",
            "gender"=>"female",
            "dob"=>"2016-11-28",
            "Address"=>"La Flora",
            "phone_number"=>"2000147",
            "email"=>"shanna@khabh.com",
            "password"=>bcrypt("123456")
        );

        $data18 = array(
            "user_type"=>"registered",
            "first_name"=>"Catrine",
            "last_name"=>"Rob",
            "nic"=>"C7589662005212",
            "gender"=>"female",
            "dob"=>"2016-11-28",
            "Address"=>"Castel",
            "phone_number"=>"2000147",
            "email"=>"catrine@rob.com",
            "password"=>bcrypt("123456")
        );

        $data19 = array(
            "user_type"=>"registered",
            "first_name"=>"Richa",
            "last_name"=>"Corlin",
            "nic"=>"R3322110012000",
            "gender"=>"female",
            "dob"=>"2016-11-28",
            "Address"=>"Plaine Wilhems",
            "phone_number"=>"2000147",
            "email"=>"richa@corlin.com",
            "password"=>bcrypt("123456")
        );

        $data20 = array(
            "user_type"=>"registered",
            "first_name"=>"Katherine",
            "last_name"=>"Mirol",
            "nic"=>"M1548967632140",
            "gender"=>"female",
            "dob"=>"2016-11-28",
            "Address"=>"Piton",
            "phone_number"=>"2000147",
            "email"=>"katherine@mirol.com",
            "password"=>bcrypt("123456")
        );

        DB::table('users')->insert(array($data1,$data2,$data3,$data4,$data5,$data6,$data7,$data8,$data9,$data10,$data11,$data12,$data13,$data14,$data15,$data16,$data17,$data18,$data19,$data20));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
