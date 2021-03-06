<?php

namespace App\Traits;

use App\mes_models\Annee;

Trait AnneeCourante{

    public function verifit_annee_courante()
    {
        $annee_courante = Annee::where('status',1)->first();

        return $annee_courante;
    }
}




?>