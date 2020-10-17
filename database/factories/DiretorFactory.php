<?php

use App\Model\Api\Diretor;
use Faker\Generator as Faker;

$factory->define(Diretor::class, function (Faker $faker) {
    return [
        'name_diretor'      => $faker->name,
        'data_nascimento'   => $faker->date('Y-m-d'),
        'sexo'              => $faker->randomElement(["f", "m"]),
        'email'             => $faker->unique()->safeEmail,
    ];
});
