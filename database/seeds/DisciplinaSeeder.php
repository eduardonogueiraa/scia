<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisciplinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*factory(App\Disciplina::class, 5)
        	->create();*/
        $nome = [
            'Redes',
            'Banco de Dados',
            'Programação para Internet',
            'Autoria Web',
            'Projeto de Software'
        ];

        
        for ($i = 0; $i < 5; $i++) {
            DB::table('disciplinas')->insert([
                'nome' => $nome[$i]
            ]);    
        }
    }
}
