<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

class PaiementTravailleur extends Model
{
    //
    protected $table = 'paiement_travailleur';

    protected $fillable = ['montant_payer','type_paiement' ,'travailleur_id'];

    public function travailleur()
    {
        return $this->belongsTo('App\mes_models\Travailleur');
    }
}
