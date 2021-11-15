<?php

use Illuminate\Database\Seeder;
use App\Author;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Crea 50 instancias de autor de forma aleatoria gracias al faker/generator del modelFactory
         */
        factory(Author::class,50)->create();
    }
}
