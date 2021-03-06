<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $table = 'client';

    protected $fillable = ['nom_client','contact_client'];

    public function ventePieces()
    {
        return $this->hasMany('App\mes_models\VentePiece');
    }

    public function venteDivers()
    {
        return $this->hasMany('App\mes_models\VenteDiver');
    }

    public function remboursementPieces()
    {
        return $this->hasMany('App\mes_models\RemboursementPiece');
    }

    public function paniers()
    {
        return $this->hasMany('App\mes_models\Panier');
    }

    /**
     * les commandes du client
     */
    public function commandes()
    {
        return $this->hasMany('App\mes_models\Commande');
    }
    /**
     * les factures du client
     */
    public function factures()
    {
        return $this->hasMany('App\mes_models\Facture');
    }

    public function paiementClients()
    {
        return $this->hasMany('App\mes_models\PaiementClient');
    }

}
