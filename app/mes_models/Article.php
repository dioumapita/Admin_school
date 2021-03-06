<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'article';

    protected $fillable = ['nom_article','prix','quantite','voiture_id','arrivage_id'];

    public function voiture()
    {
        return $this->belongsTo('App\mes_models\Voiture');
    }

    public function arrivage()
    {
        return $this->belongsTo('App\mes_models\Arrivage');
    }
}
