<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

class PaiementClient extends Model
{
    //

    protected $table = 'paiement_client';

    protected $fillable = ['montant_payer','type_paiement','delais_reliquat','client_id'];

    public function client()
    {
        return $this->belongsTo('App\mes_models\Client');
    }
}
