<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

class RemboursementPiece extends Model
{
    //
    protected $table = 'remboursement_piece';

    protected $fillable = ['montant_rembourser','piece_id','client_id'];

    public function client()
    {
        return $this->belongsTo('App\mes_models\Client');
    }

    public function piece()
    {
        return $this->belongsTo('App\mes_models\Piece');
    }
}
