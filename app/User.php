<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'prenom', 'username', 'email', 'telephone' ,'date_naiss', 'civilite', 'adresse', 'biographie', 'avatar' , 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * utilisation de la methode isOnline pour
     * verifier et afficher les utilisateurs connectés
     * on utilise Cache::has() pour verifier si la clé exite
     */
    public function isOnline()
    {
        return Cache::has('user-is-online' . $this->id);
    }

    protected $dates = ['last_seen'];
}
