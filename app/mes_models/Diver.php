<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

class Diver extends Model
{
    //
    protected $table = 'divers';

    protected $fillable = ['nom_divers','prix','quantite','image_divers','arrivage_id'];

    public function venteDivers()
    {
        return $this->hasMany('App\mes_models\VenteDiver','divers_id');
    }
}
