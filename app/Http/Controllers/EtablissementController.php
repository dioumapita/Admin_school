<?php

namespace App\Http\Controllers;

use App\Traits\InfosUser;
use App\Traits\ThemeActive;
use Illuminate\Http\Request;

class EtablissementController extends Controller
{
    //
    use ThemeActive;
    use InfosUser;
     /**
     * ThemeActive est un trait qui permet de recuperer le chemin du 
     * theme activer avec la methode verifit_theme_active()
     * InfosUser est un trait permettant de recuperer les informations de
     * l'utilisateur connecté
     */

     /**
      * on créer une methode infos_general permettant d'afficher le formulaire
      * et les informations générales de l'etablissement
      */
      public function infos_general()
      {
         
        //on recupère le chemin du thème actif
          $chemin_theme_actif = $this->verifit_theme_actif();
        //on recupère les informations de l'utilisateur connecté
         $info_user_conneter = $this->user_connecter();
         $nom = $info_user_conneter->nom;
         $avatar = $info_user_conneter->avatar;
        
         return view('pages.etablissement/infos_general',compact('chemin_theme_actif','nom','avatar'));
      }

      /**
       * on créer une methode annee_scolaire permet de gerer les annee_scolaire de l'etablissement
       */
      // public function annee_scolaire()
      // {
      //   //on recupère le chemin du thème actif
      //   $chemin_theme_actif = $this->verifit_theme_actif();
      //   //on recupère les informations de l'utilisateur connecté
      //    $info_user_conneter = $this->user_connecter();
      //    $nom = $info_user_conneter->nom;
      //    $avatar = $info_user_conneter->avatar;

      //    return view('pages.etablissement/annee_scolaire',compact('chemin_theme_actif','nom','avatar'));
      // }

}
