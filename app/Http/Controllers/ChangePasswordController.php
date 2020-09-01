<?php

namespace App\Http\Controllers;

use App\Rules\VerifyCurrentPassword;
use App\Traits\InfosUser;
use App\Traits\ThemeActive;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

// use RealRashid\SweetAlert\Facades\Alert;

class ChangePasswordController extends Controller
{
    use ThemeActive;
    use InfosUser;
    /**
     * ThemeActive est un trait qui permet de recuperer le chemin du 
     * theme activer avec la methode verifit_theme_active()
     * InfosUser est un trait permettant de recuperer les informations de
     * l'utilisateur connecté
     */
    
    //
    public function create()
    {
        //on récupère le chemin du thème actif
        $chemin_theme_actif = $this->verifit_theme_actif();
        //on récupère les informations de l'utilisateur connecter

        $info_user_connecter = $this->user_connecter();
        $nom = $info_user_connecter->nom;
        $prenom = $info_user_connecter->prenom;
        $telephone = $info_user_connecter->telephone;
        $adresse = $info_user_connecter->adresse;
        $avatar = $info_user_connecter->avatar;

        return view('pages.changepassword.change_password',compact('chemin_theme_actif','nom','prenom','telephone','adresse','avatar'));
    }

    public function store(Request $request)
    {
        /**
         * lors de la validation du mot de passe courant on verifit avec le role
         * verfifyCurrrentPassword si le mot de passe courant de l'utilisateur
         * est valide
         */
        $request->validate([
            'password_courant' => ['required',new VerifyCurrentPassword],
            'new_password' => ['required','string','min:8'],
            'confirm_new_password' => ['same:new_password']
        ]);
        /**
         * si toutes les informations saisi par l'utilisateur sont 
         * valide on met à jour son mot de passe et on lui deconnecte
         * et on lui redirige vers la page de connexion
         */
        $update_password_user = User::where('id',Auth::id())->update([
            'password' => Hash::make($request->new_password)
        ]);
        Auth::logout();
        // Session::flash('message','Votre mot de passe a été changer avec succès');
        return  redirect('login')->with('message','Votre mot de passe a été changer avec succès');
    }
}
