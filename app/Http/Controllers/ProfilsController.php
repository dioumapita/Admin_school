<?php

namespace App\Http\Controllers;

use App\Traits\InfosUser;
use App\Traits\ThemeActive;
use Illuminate\Http\Request;

class ProfilsController extends Controller
{
    //
    use ThemeActive;
    use InfosUser;

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

        return view('pages.profils/mon_profil',compact('chemin_theme_actif','nom','avatar'));
    }
}
