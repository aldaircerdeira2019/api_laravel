<?php

use App\Model\Api\Ator;
use Faker\Generator as Faker;

$factory->define(Ator::class, function (Faker $faker) {
    return [
        'name_ator'         => $faker->name,
        'data_nascimento'   => $faker->date('Y-m-d'),
        'sexo'              => $faker->randomElement(["f", "m"]),
        'email'             => $faker->unique()->safeEmail,
    ];
});
