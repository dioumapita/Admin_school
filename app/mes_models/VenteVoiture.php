<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

class VenteVoiture extends Model
{
    //
    protected $table = 'vente_voiture';

    protected $fillable = ['montant_payer','voiture_id','client_id','temoin_acheteur','contact_temoin_acheteur','temoin_vendeur','contact_temoin_vendeur'];

    public function client()
    {
        return $this->belongsTo('App\mes_models\Client');
    }

    public function voiture()
    {
        return $this->belongsTo('App\mes_models\Voiture');
    }
}
