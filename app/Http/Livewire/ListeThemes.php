<?php

namespace App\Http\Livewire;
use App\mes_models\Theme;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Alert;

class ListeThemes extends Component
{
    /**
     * la variable nom_theme_user contient le nom du theme selectionner par l'utilisateur
     */
     
    public $nom_theme_user;
      
    /**Theme light */
        public function light_theme()
        {
            
            /**
                 * On verifit si l'utilisateur à déja activer un theme,
                 * si c'est le cas on fait une mis à jour du theme qu'il a activer en activant
                 * le theme light theme uniquement pour cet utilisateur.
                 * Au contraire s'il n'a jamais activer un theme on ajoute ce theme light theme
                 * uniquement pour cet utilisateur
             */
    
            /*
            * On récupère l'identifiant de l'utilisateur connecté et on verifit si cet identifiant
            * est lié à un theme
            */
                $id_user = Auth::id();
                $verifit_theme_user = Theme::where('id_user',$id_user)->first();
                //si l'identifiant de l'utilisateur est lier à un theme on fait une mise à jour de ce theme
    
                if($verifit_theme_user)
                {
                    $update_theme = Theme::where('id_user',$id_user)->update([
                        'nom' => 'light',
                        'description' => 'light theme',
                        'chemin' => 'layouts.themes/_light_theme',
                        'id_user' => $id_user
                    ]);

                    /*
                    * Aprés la mise à jour on redirige l'utilisateur sur la page home et on affiche un message
                    * de succès avec sweat alert
                    */
                    alert('Félicitations','Le thème light à été activé avec succès','success')->addImage('/assets/asset_principal/img_sweat_alert/user.png')->timerProgressBar();
                    return redirect()->to('/home');
                }
    
                //si l'identifiant de l'utilisateur n'est pas lier à un theme on crée le theme light theme
    
                else
                {
                    $create_theme = Theme::create([
                        'nom' => 'light',
                        'description' => 'light theme',
                        'chemin' => 'layouts.themes/_light_theme',
                        'id_user' => $id_user
                    ]);

                    /*
                    * Aprés la création du thème on redirige l'utilisateur sur la page home et on affiche un message
                    * de succès avec sweat alert
                    */
                    alert('Félicitations','Le thème light à été activé avec succès','success')->addImage('/assets/asset_principal/img_sweat_alert/user.png')->timerProgressBar();
                    return redirect()->to('/home');
                }
        }
    
    /**Theme dark */
 
        public function dark_theme()
        {
            /**
                 * On verifit si l'utilisateur à déja activer un theme,
                 * si c'est le cas on fait une mis à jour du theme qu'il a activer en activant
                 * le theme dark theme uniquement pour cet utilisateur.
                 * Au contraire s'il n'a jamais activer un theme on ajoute ce theme dark theme
                 * uniquement pour cet utilisateur
             */
    
            /*
            * On récupère l'identifiant de l'utilisateur connecté et on verifit si cet identifiant
            * est lié à un theme
            */
            $id_user = Auth::id();
            $verifit_theme_user = Theme::where('id_user',$id_user)->first();
    
            //si l'identifiant de l'utilisateur est lier à un theme on fait une mise à jour de ce theme
    
            if($verifit_theme_user)
            {
                $update_theme = Theme::where('id_user',$id_user)->update([
                    'nom' => 'dark',
                    'description' => 'dark theme',
                    'chemin' => 'layouts.themes/_dark_theme',
                    'id_user' => $id_user
                ]);

                /*
                * Aprés la mise à jour on redirige l'utilisateur sur la page home et on affiche un message
                * de succès avec sweat alert
                */
                    alert('Félicitations','Le thème dark à été activé avec succès','success')->addImage('/assets/asset_principal/img_sweat_alert/user.png')->timerProgressBar();
                    return redirect()->to('/home');
            }
    
            //si l'identifiant de l'utilisateur n'est pas lier à un theme on crée le theme dark theme
    
            else
            {
                $create_theme = Theme::create([
                    'nom' => 'dark',
                    'description' => 'dark theme',
                    'chemin' => 'layouts.themes/_dark_theme',
                    'id_user' => $id_user
                ]);

                /*
                * Aprés la création du thème on redirige l'utilisateur sur la page home et on affiche un message
                * de succès avec sweat alert
                */
                    alert('Félicitations','Le thème dark à été activé avec succès','success')->addImage('/assets/asset_principal/img_sweat_alert/user.png')->timerProgressBar();
                    return redirect()->to('/home');
            }
        }
 
        public function render()
        {
            /**
             * on recupère le nom du thème selectionner par l'utilisateur pour dire que cet
             * thème est activer
             */
            $id_user = Auth::id();
            $verifit_theme_user = Theme::where('id_user',$id_user)->first();
            if($verifit_theme_user)
                {
                    $this->nom_theme_user = $verifit_theme_user->nom;
                }
            return view('livewire.liste-themes');
        }
}
