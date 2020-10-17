<?php
use App\Model\Api\Diretor;
use Illuminate\Database\Seeder;

class DiretorSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Diretor::class,30)->create();
    }
}
