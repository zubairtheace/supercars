<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'nic' => $faker->bothify('?#############'),
        'gender' => $faker->randomElement($array=('male', 'female')),
        'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'address' => $
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = 'secret',
        'remember_token' => str_random(10),
    ];
});
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
