<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\mes_models\Etablissement;
use Faker\Generator as Faker;

$factory->define(Etablissement::class, function (Faker $faker) {
    return [
        //
        'nom' => $faker->name,
        'adresse' => $faker->address,
        'telephone' => '623897708',
        'email' => $faker->email,
        'site_web' => $faker->safeEmail,
        'type' => 'privé',
        'logo' => $faker->imageUrl,
        'cachet' => $faker->imageUrl
    ];
});
