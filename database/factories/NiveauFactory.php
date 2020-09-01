<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\mes_models\Niveau;
use Faker\Generator as Faker;

$factory->define(Niveau::class, function (Faker $faker) {
    return [
        //
        'nom_niveau' => '11ème',
        'options' => 'Science Sociale'
    ];
});
