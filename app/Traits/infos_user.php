<?php
namespace App\Traits;

use App\User;
use Illuminate\Support\Facades\Auth;

Trait InfosUser{

    public function user_connecter()
    {
        //on récupère l'identifiant de l'utilisateur connecté
        $id_user = Auth::id();
        //on récupère les informations de l'utilisateur connecté
        $info_user_connecter = User::where('id',$id_user)->first();
        //on retourne les informations de l'utilisateur connecte

        return $info_user_connecter;
    }
}






?>