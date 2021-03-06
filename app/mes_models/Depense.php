<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    //
    protected $table = 'depense';

    protected $fillable = ['nom_depense','montant','date_depense','arrivage_id'];

    protected $dates = ['date_depense'];

    public function arrivage()
    {
        return $this->belongsTo('App\mes_models\Arrivage');
    }
}
