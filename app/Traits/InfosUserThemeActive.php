<?php
namespace App\Traits;

Trait InfosUserThemeActive {

    use InfosUser;
    use ThemeActive;
    use AnneeCourante;
    /**
     * ThemeActive est un trait qui permet de recuperer le chemin du 
     * theme activer avec la methode verifit_theme_active()
     * InfosUser est un trait permettant de recuperer les informations de
     * l'utilisateur connecté
     */

    /**
      * Déclaration des attributs permettant stocker le contenu des autres traits
    */ 
    public $chemin_theme_actif;
    public $nom;
    public $avatar;
    public $annee_courante;

    /**
     * on créer la methode InfosUser_AND_Theme_Active pour initialiser les 
     * attributs declarés ci-dessus
     */
    public function InfosUser_AND_ThemeActive()
    {
        $this->chemin_theme_actif = $this->verifit_theme_actif();
        $info_user_connecter = $this->user_connecter();
        $this->nom = $info_user_connecter->nom;
        $this->avatar = $info_user_connecter->avatar;

        $this->annee_courante = $this->verifit_annee_courante();
    }
}



?>