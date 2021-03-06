<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

class CreditTravailleur extends Model
{
    //

    protected $table = 'credit_travailleur';

    protected $fillable = ['montant_credit','type_paiement','travailleur_id'];

    public function travailleur()
    {
        return $this->belongsTo('App\mes_models\Travailleur');
    }
}
