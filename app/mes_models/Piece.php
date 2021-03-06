<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

class Piece extends Model
{
    //
    protected $table = 'piece';

    protected $fillable = ['nom_piece','prix','quantite','image_piece','arrivage_id'];

    public function ventePieces()
    {
        return $this->hasMany('App\mes_models\VentePiece');
    }

    /**
     * A revoir cette methode
     */
    public function venteVoiture()
    {
        return $this->hasMany('App\mes_models\VenteVoiture');
    }

    public function arrivage()
    {
        return $this->belongsTo('App\mes_models\Arrivage');
    }

    public function remboursementPieces()
    {
        return $this->hasMany('App\mes_models\RemboursementPiece');
    }

}
