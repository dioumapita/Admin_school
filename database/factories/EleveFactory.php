<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\mes_models\Eleve;
use Faker\Generator as Faker;

$factory->define(Eleve::class, function (Faker $faker) {
    return [
        //
        'matricule' => '555',
        'nom' => 'barry',
        'prenom' => 'diouma',
        'sexe' => 'Masculin',
        'date_naissance' => $faker->date,
        'classe' => '1ère année',
        'telephone' => 623897708,
        'quartier' => 'Kobaya',
        'nom_parent' => 'barry',
        'prenom_parent' => 'Boubacar',
        'profession' => 'Enseignant',
        'telephone_parent' => 623897708
    ];
});
