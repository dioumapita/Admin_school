<?php

namespace App\Http\Controllers;

use App\mes_models\Niveau;
use Illuminate\Http\Request;
use App\Traits\InfosUserThemeActive;

class ClassesController extends Controller
{
    /**
     * le trait InfosUserThemeActive contient deux:traits
     * 1-le trait permettant de selectionner les informations
     *   de l'utilisateur connecté
     * 2-le trait permettant de selectionner le theme activer
     */
    use InfosUserThemeActive;

    /**
     * on créer une methode all_classe qui permet d'afficher la 
     * liste de toutes les classes Ex:1er année
     */

    public function all_classes()
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

        return view('pages.classes/all_classes',compact('chemin_theme_actif','nom','avatar'));
    }

    /**
     * création d'une methode OutilsClasse qui permet d'imprimer,exporter vers excel
     * enregistrer au format pdf, copier vers un fichier text grace au plugins datatables
     */
    public function OutilsClasse()
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

        //listes des classe
        $all_classes = Niveau::orderby('nom','asc')->orderby('branche','asc')->get();

        //utilisation de la variable $i pour parcourir la boucle
            $i = 1;
        return view('pages.classes/outils_classe',compact('chemin_theme_actif','nom','avatar','all_classes','i'));
    }

}
