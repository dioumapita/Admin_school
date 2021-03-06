<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

class Travailleur extends Model
{
    //
    protected $table = 'travailleur';

    protected $fillable = ['nom','prenom','contact','quartier','image_travailleur'];

    public function PaiementTravailleurs()
    {
        return $this->hasMany('App\mes_models\PaiementTravailleur');
    }

    public function CreditTravailleurs()
    {
        return $this->hasMany('App\mes_models\CreditTravailleur');
    }
}
