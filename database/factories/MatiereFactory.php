<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\mes_models\Matiere;
use Faker\Generator as Faker;

$factory->define(Matiere::class, function (Faker $faker) {
    return [
        //
        'nom_matiere' => 'Math'
    ];
});
