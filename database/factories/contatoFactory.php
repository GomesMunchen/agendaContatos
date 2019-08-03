<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Contatos::class, function (Faker $faker) {
    return [
        'saudacao' => 'Sr.',
        'nome' => $faker->name,
        'telefone' => $faker->cellphoneNumber,
        'email' => $faker->unique()->safeEmail,
        'nota' => 'Usuário criado usando método factory e classe Faker.'
    ];
});
