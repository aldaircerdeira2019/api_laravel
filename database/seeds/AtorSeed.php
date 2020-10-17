<?php
use App\Model\Api\Ator;
use Illuminate\Database\Seeder;

class AtorSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Ator::class,50)->create();
    }
}
