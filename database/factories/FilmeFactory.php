<?php

use App\Model\Api\Filme;
use Faker\Generator as Faker;
use App\Model\Api\Categoria;
use App\Model\Api\Diretor;

$factory->define(Filme::class, function (Faker $faker) {
    $categoria_id = Categoria::pluck('id')->toArray();
    $diretor_id = Diretor::pluck('id')->toArray();
    return [
        'categoria_id'      =>  $faker->randomElement($categoria_id),
        'diretor_id'        =>  $faker->randomElement($diretor_id),
        'name_filme'        =>  $faker->words(3, true),
        'data_estreia'      =>  $faker->date('Y-m-d'),
        'descricao'         =>  $faker->realText,
    ];
 
});
