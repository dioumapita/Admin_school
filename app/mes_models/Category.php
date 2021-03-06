<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'category';

    protected $fillable = ['nom_categorie'];

    public function pieces()
    {
        return $this->hasMany('App\mes_models\Piece');
    }
}
