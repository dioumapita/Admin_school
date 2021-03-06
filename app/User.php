<?php

namespace App;

use App\mes_models\Role;
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
        'nom', 'prenom', 'username', 'email', 'telephone' ,'date_naiss', 'civilite', 'adresse', 'biographie', 'avatar', 'diplome_obtenu', 'password'
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roles(){
        
        return $this->belongsToMany(Role::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enseigners()
    {
        return $this->hasMany('App\mes_models\Enseigner');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emargements()
    {
        return $this->hasMany('App\mes_models\Emargement');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paiementEnseignants()
    {
        return $this->hasMany('App\mes_models\PaiementEnseignant');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function creditEnseignants()
    {
        return $this->hasMany('App\mes_models\CreditEnseignant');
    }
}
