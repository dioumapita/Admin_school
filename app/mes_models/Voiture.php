<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;
class Voiture extends Model
{
    //
    protected $table = 'voiture';

    protected $fillable = ['immatriculation','nom_voiture','description','prix','arrivage_id','fournisseur_id','kilometrage','status','image_voiture'];

    public function arrivage()
    {
        return $this->belongsTo('App\mes_models\Arrivage');
    }

    public function fournisseur()
    {
        return $this->belongsTo('App\mes_models\Fournisseur');
    }

    public function pieces()
    {
        return $this->hasMany('App\mes_models\Piece');
    }

    public function venteVoiture()
    {
        return $this->hasMany('App\mes_models\VenteVoiture');
    }

}
