<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DatosPersona;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(DatosPersona::class, function (Faker $faker) {
    return [
        'codigo' => Str::random(5),
        'nombre' =>  $faker->name,
        'apellido' =>  $faker->lastName,
       // 'imagen' => \Faker\Provider\Image::image(storage_path() . '/app/public/users', 200, 200, 'people', false), // password
  
    ];
});
