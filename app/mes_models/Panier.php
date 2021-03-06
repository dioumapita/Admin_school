<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    //

    protected $table = 'panier';

    protected $fillable = ['piece','prix','quantite','voiture_id','client_id','status'];

    public function voiture()
    {
        return $this->belongsTo('App\mes_models\Voiture');
    }

    public function client()
    {
        return $this->belongsTo('App\mes_models\Client');
    }
}
