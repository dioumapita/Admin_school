<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    //
    protected $table = 'fournisseur';

    protected $fillable = ['nom','prenom','contact','ville','photo_fournisseur'];

    public function voitures()
    {
        return $this->hasMany('App\mes_models\Voiture');
    }
}
