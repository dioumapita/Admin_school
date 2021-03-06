<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

class Arrivage extends Model
{
    //

    protected $table = 'arrivage';

    protected $fillable = ['nom_arrivage','date_arrivage'];

    protected $dates = ['date_arrivage','heure_arrivage'];

    public function voitures()
    {
        return $this->hasMany('App\mes_models\Voiture');
    }

    public function pieces()
    {
        return $this->hasMany('App\mes_models\Piece');
    }

    public function depenses()
    {
        return $this->hasMany('App\mes_models\Depense');
    }

}
