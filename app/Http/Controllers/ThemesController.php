<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mes_models\Theme;
use App\Traits\InfosUser;
use App\Traits\ThemeActive;

class ThemesController extends Controller
{
    use ThemeActive;
    use InfosUser;
    /**
     * ThemeActive est un trait qui permet de recuperer le chemin du 
     * theme activer avec la methode verifit_theme_active()
     * InfosUser est un trait permettant de recuperer les informations
     * de l'utilisateur connecter
     */
    public function all_themes()
    {
        //on recupere les informations de l'utilisateur connecter
        $chemin_theme_actif = $this->verifit_theme_actif();

         //on récupère les informations de l'utilisateur connecter

         $info_user_connecter = $this->user_connecter();
         $nom = $info_user_connecter->nom;
         $avatar = $info_user_connecter->avatar;

        return view('pages.all_themes.all_themes',compact('chemin_theme_actif','nom','avatar'));
    }
    

}
