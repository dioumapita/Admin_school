<?php

namespace App\Http\Controllers;

use App\Traits\InfosUserThemeActive;
use Illuminate\Http\Request;
use App\mes_models\Annee;
use App\mes_models\Arrivage;
use App\mes_models\Commande;
use App\mes_models\Depense;
use App\mes_models\Diver;
use App\mes_models\PaiementClient;
use App\mes_models\Piece;
use App\mes_models\Voiture;

class ComptabiliteController extends Controller
{
    use InfosUserThemeActive;
    //

    public function generale()
    {
        /**
         * on appelle la methode InfosUser_AND_ThemeActive qui contient
         * le chemin du theme actif,le nom de l'utilisateur connecter,
         * la photo de profil de l'utilisateur connecter
         */
        $this->InfosUser_AND_ThemeActive();

        $chemin_theme_actif = $this->chemin_theme_actif;
        $nom = $this->nom;
        $avatar = $this->avatar;
        $annee_courante = $this->annee_courante;
        $all_annee = Annee::all();

        $all_arrivages = Arrivage::all();

        $all_voitures = Voiture::all();
        $all_pieces = Piece::all();
        $all_divers = Diver::all();
        $all_depenses = Depense::all();
        $all_commandes = Commande::where('status',1)->get();
        $all_paiements = PaiementClient::all();

        return view('pages.comptabilite/generale',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_arrivages','all_voitures','all_pieces','all_divers','all_depenses','all_commandes','all_paiements'));
    }
}
