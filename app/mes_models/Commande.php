<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    //
    protected $table = 'commande';

    protected $fillable = ['client_id','article_id','voiture_id','temoin_client','tel_temoin_client','temoin_vendeur','tel_temoin_vendeur','status'];

    /**
     * Référecement des clés étrangères
     */
    public function client()
    {
        return $this->belongsTo('App\mes_models\Client');
    }

    public function article()
    {
        return $this->belongsTo('App\mes_models\Article');
    }

    public function voiture()
    {
        return $this->belongsTo('App\mes_models\Voiture');
    }
}
