<?php

use Illuminate\Database\Seeder;
use App\Model\Api\Filme;

class FilmeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Filme::class,200)->create();
    }
}
