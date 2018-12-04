<?php

use Faker\Generator as Faker;

$factory->define(App\Postagem::class, function (Faker $faker) {

	$random = rand(1,App\User::count());
	$random2 = rand(1,App\Disciplina::count());

    return [
        'tema' => $faker->sentence(1),
        'descricao' => $faker->text(), 
        'id_usuario' => App\User::find($random)->id,
        'id_disciplina' => App\Disciplina::find($random2)->id,
    ];
});
 