<?php

namespace App\Http\Middleware;

use App\mes_models\Annee;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class FirstLoginPersonel
{
    /**
     * Ce middleware est utiliser pour verifier si c'est la première connexion du personnel
     * (enseignant,agent administratif,comptable ...)
     * si c'est la première connexion on l'oblige à changer son password 
     */

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        //on verifit si on a un utilisateur connecter
        //on verifit si c'est la premiere connexion de l'utilisateur
        if(Auth::user())
        {
            if(Hash::check('dioumapita',Auth::user()->password))
            {
                alert('Bienvenue','Veuillez changer votre mot de passe','success')->addImage('/assets/asset_principal/img_sweat_alert/user.png')->autoClose(false);;
                return redirect(route('form_change_password'));
            }
        }
            
        return $next($request);
    }
}
