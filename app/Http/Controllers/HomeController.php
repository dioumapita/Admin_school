<?php

namespace App\Http\Controllers;

use App\mes_models\Annee;
use App\mes_models\Fournisseur;
use App\mes_models\Inscrit;
use App\mes_models\Matiere;
use App\mes_models\Niveau;
use App\mes_models\Role;
use App\mes_models\Voiture;
use App\Traits\AnneeCourante;
use App\Traits\InfosUser;
use Illuminate\Http\Request;
use App\Traits\ThemeActive;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    use ThemeActive;
    use InfosUser;
    use AnneeCourante;
    /**
     * ThemeActive est un trait qui permet de recuperer le chemin du
     * theme activer avec la methode verifit_theme_active()
     * InfosUser est un trait permettant de recuperer les informations de
     * l'utilisateur connecté
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      //on récupère le chemin du thème actif
        $chemin_theme_actif = $this->verifit_theme_actif();

        //on récupère les informations de l'utilisateur connecter

        $info_user_connecter = $this->user_connecter();
        $nom = $info_user_connecter->nom;
        $avatar = $info_user_connecter->avatar;

        $annee_courante = $this->verifit_annee_courante();

        // dd($annee_courante);

        /**
         * on affiche toutes les années scolaire permettant à l'utilisateur de selectionner
         * l'année scolaire dans la qu'elle il veut travailler
         */

        $all_annee = Annee::all();
        $nbre_voitures = Voiture::count();
        $nbre_fournisseurs = Fournisseur::count();


        return view('pages.accueil/home',compact('chemin_theme_actif','nom','avatar','all_annee','annee_courante','nbre_voitures','nbre_fournisseurs'));
    }
}
