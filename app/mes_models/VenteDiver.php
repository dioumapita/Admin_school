<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

class VenteDiver extends Model
{
    //
    protected $table = 'vente_divers';

    protected $fillable = ['montant_payer','quantite','divers_id','client_id'];

    public function client()
    {
        return $this->belongsTo('App\mes_models\Client');
    }
    public function diver()
    {
        return $this->belongsTo('App\mes_models\Diver','divers_id');
    }
}
