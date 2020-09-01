<?php

namespace App\Traits;
use App\mes_models\Theme;
use Illuminate\Support\Facades\Auth;

trait ThemeActive {

    /**
     * on créer une methode verifit_theme_actif() qui permet de renvoyer le chemin du theme actif
     */

    public function verifit_theme_actif()
    {
        /**
         * On verifit si l'utilisateur connecté à déjà ajouter un thème
         * si c'est le cas on renvoi le chemin de cet theme uniquement pour cet utilisateur,
         * Au contraire on renvoi le chemein du theme par defaut
         */

        //on recupère l'identifiant de l'utilisateur connecté
        $id_user = Auth::id();
        //on verifit si l'identfiant de l'utilisateur est lier à un theme
        $theme = Theme::where('id_user',$id_user)->first();
        
        /*
        * si l'identifiant de l'utilisateur est lier à un thème on renvoi le chemin de cet thème
        *  uniquement pour cet utilisateur
        */
        if($theme)
        {
            $chemin_theme_activer = $theme->chemin;
            
            return $chemin_theme_activer;
        }
        // si l'identifiant de l'utilisateur ne correspond à aucun thème on revoi le thème par défaut
        else
            {
                $theme_default = Theme::where('nom','default_theme')->first();
                $chemin_theme_activer = $theme_default->chemin;

                return $chemin_theme_activer;
            }
    }
}




?>