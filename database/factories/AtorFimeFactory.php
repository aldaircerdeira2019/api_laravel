<?php

use App\Model\Api\AtorFilme;
use Faker\Generator as Faker;
use App\Model\Api\Ator;
use App\Model\Api\Filme;

$factory->define(AtorFilme::class, function (Faker $faker) {
    $ator_id = Ator::pluck('id')->toArray();
    $filme_id = Filme::pluck('id')->toArray();
    return [
        'ator_id'      =>  $faker->randomElement($ator_id),
        'filme_id'        =>  $faker->randomElement($filme_id),
    ];
});
