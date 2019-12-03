<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Marital_Status;
use Faker\Generator as Faker;

$factory->define(Marital_Status::class, function (Faker $faker) {
    return [
        'nombre' => $faker->randomElement(['SOLTER@','CASAD@','VIUD@','DIVORCIAD@','UNION LIBRE']),
    ];
});
