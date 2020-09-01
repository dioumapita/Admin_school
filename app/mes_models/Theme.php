<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    //
    protected $fillable = ['nom','description','chemin','status','id_user'];
}
