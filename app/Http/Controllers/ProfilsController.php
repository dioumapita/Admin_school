<?php

namespace App\Http\Controllers;

use App\Traits\InfosUser;
use App\Traits\ThemeActive;
use Illuminate\Http\Request;
use App\Traits\AnneeCourante;
use App\mes_models\Annee;

class ProfilsController extends Controller
{
    //
    use ThemeActive;
    use InfosUser;
    use AnneeCourante;
    /**
     * ThemeActive est un trait qui permet de recuperer le chemin du 
     * theme activer avec la methode verifit_theme_active()
     * InfosUser est un trait permettant de recuperer les informations de 
     * l'utilisateur connecte
     */
    public function mon_profil()
    {
        //on récupère le chemin du thème actif
        $chemin_theme_actif = $this->verifit_theme_actif();

         //on récupère les informations de l'utilisateur connecter

         $info_user_connecter = $this->user_connecter();
         $nom = $info_user_connecter->nom;
         $avatar = $info_user_connecter->avatar;
         $annee_courante = $this->verifit_annee_courante();
         $all_annee = Annee::all();

        return view('pages.profils/mon_profil',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee'));
    }
}
