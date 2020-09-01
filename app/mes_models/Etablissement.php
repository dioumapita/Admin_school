<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    //
    protected $fillable  = ['nom','adresse','telephone','email','site_web','type','logo','cachet'];
}
