<?php

use App\Model\Api\AtorFilme;
use Illuminate\Database\Seeder;

class AtorFilmeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(AtorFilme::class,500)->create();
    }
}
