<?php

namespace App\Http\Middleware;

use App\User;
use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class LastUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /**
         * on verifit si l'utilisateur est connecté
         * on paramètre la durée de la session aprés deconnexion
         * on utilise carbon pour gerer le temps
         * on crée une variable expireAt qui prend le temps d'expiration
         * on utilise la facade cache pour stocker la cle,la valeur,et temps
         */
        if(Auth::check())
        {
            $expireAt = Carbon::now()->addMinutes(1);
            Cache::put('user-is-online'. Auth::user()->id,true,$expireAt);
            /**
             * on enregistre l'heure à la qu'elle l'utilisateur s'est connecté
             * pour savoir il s'est connecté depuis combiens de temps ou il s'est
             * deconnecter il y a combien de temps
             */
            //on recupère l'identifiant de l'utilisateur connecter
                $id_user = Auth::id();
            //on recupère la date et l'heure actuel au format français
                $time_connect_user = Carbon::now();
            //on mais à jour notre champs last_seen
                $update_last_seen = User::where('id',$id_user)->update(['last_seen' => $time_connect_user]);
        }
        return $next($request);
    }
}
