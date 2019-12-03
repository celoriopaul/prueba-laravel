<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'id_country' => rand(1,20),
        'id_marital_status' => rand(1,5),
        'nombre' => $faker->firstName(),
        'apellido' => $faker->lastName(),
        'cedula' => $faker->unique()->isbn10(),
        'fecha_nacimiento' =>$faker->dateTimeBetween('-40 years', '-20 years', null),
        'fecha_ingreso' => $faker->dateTimeBetween('-5 years', '-2 years', null),
        'sexo' => $faker->randomElement(['MASCULINO','FEMENINO']),
        'estado' => $faker->randomElement(['Activo','Pasivo']),
    ];
});
