<?php
/**
 * on crée une fonction page_title qui permet de geré les titres des 
 * différentes pages
 */

function page_title($title)
{
    /**
     * On déclare une variable $base_title qui stocke un titre de base
     * si on niveau de notre fonction page_title le titre est vide on 
     * renvoi le titre de base et au contraire on concataine le titre de base
     * avec le titre de la page
     */

        $base_title = 'Admin-School';
        if($title != '')
        {
            return $base_title.'-'.$title;
        }
        else
            {
                return $base_title;
            }
}

/**
 * on crée une fonction set_active_route qui permet de geré les routes sur les qu'elles 
 * l'utilisateur se trouve en ajoutant active sur son attribut html
 * Route::is permet de savoir sur qu'elle route l'utilisateur se trouve
 */

function set_active_route($route)
{
    return Route::is($route)?'active':'';
    
}

 




?>