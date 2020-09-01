<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\mes_models\Annee;
use Faker\Generator as Faker;

$factory->define(Annee::class, function (Faker $faker) {
    return [
        //
        'debut_annee' => '2013',
        'fin_annee' => '2014',
        'annee_scolaire' => '2013-2014'
    ];
});
