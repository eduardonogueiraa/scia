<?php

use Illuminate\Database\Seeder;

class PostagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        factory(App\Postagem::class, 10)->create();    
    }

}
