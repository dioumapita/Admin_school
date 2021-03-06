<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

class VentePiece extends Model
{
    //
    protected $table = 'vente_piece';

    protected $fillable = ['prix_piece','montant_payer','montant_rembourser','quantite','client_id','piece_id'];

    public function client()
    {
        return $this->belongsTo('App\mes_models\Client');
    }

    public function piece()
    {
        return $this->belongsTo('App\mes_models\Piece');
    }

}
