<?php

use Illuminate\Database\Seeder;

class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            [
                'name_categoria' => 'Ação',
            ],
            [
                'name_categoria' => 'Animação',
            ],
            [
                'name_categoria' => 'Aventura',
            ],
            [
                'name_categoria' => 'Cinema de arte',
            ],
            [
                'name_categoria' => 'Chanchada',
            ],
            [
                'name_categoria' => 'Comédia',
            ],
            [
                'name_categoria' => 'Comédia de ação',
            ],
            [
                'name_categoria' => 'Comédia de terror',
            ],
            [
                'name_categoria' => 'Comédia dramática',
            ],
            [
                'name_categoria' => 'Comédia romântica',
            ],
            [
                'name_categoria' => 'Dança',
            ],
            [
                'name_categoria' => 'Documentário',
            ],
            [
                'name_categoria' => 'Docuficção',
            ],
            [
                'name_categoria' => 'Drama',
            ],
            [
                'name_categoria' => 'Espionagem',
            ],
            [
                'name_categoria' => 'Faroeste',
            ],
            [
                'name_categoria' => 'Fantasia científica',
            ],
            [
                'name_categoria' => 'Ficção científica',
            ],
            [
                'name_categoria' => 'Filmes com truques',
            ],
            [
                'name_categoria' => 'Filmes de guerra',
            ],
            [
                'name_categoria' => 'Musical',
            ],
            [
                'name_categoria' => 'Filme policial',
            ],
            [
                'name_categoria' => 'Romance',
            ],
            [
                'name_categoria' => 'Seriado',
            ],
            [
                'name_categoria' => 'Suspense',
            ],
            [
                'name_categoria' => 'Terror',
            ],
            [
                'name_categoria' => 'Thriller',
            ],
            [
                'name_categoria' => 'Pornográfico',
            ],
        ]);
    }
    
    


















}
