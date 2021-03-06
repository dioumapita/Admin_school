<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    //
    protected $table = 'facture';

    protected $fillable = ['client_id'];

    public function client()
    {
        return $this->belongsTo('App\mes_models\Client');
    }
}
