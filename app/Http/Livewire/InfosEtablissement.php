<?php

namespace App\Http\Livewire;

use App\mes_models\Etablissement;
use App\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class InfosEtablissement extends Component
{

    public $nom;
    public $telephone;
    public $adresse;
    public $email;
    public $site_web;
    public $type;

    /**
     * informations personnelle de l'utilisateur connecter
     */
    public $nom_user_online;
    public $prenom_user_online;
    public $adresse_user_online;
    public $telephone_user_online;
    public $avatar_user_online;

    public function mount()
    {
        /**
         * on récupère les informations de l'etablissement
        **/
        $infos_etablissement = Etablissement::first();
        $this->nom = $infos_etablissement->nom;
        $this->telephone = $infos_etablissement->telephone;
        $this->adresse = $infos_etablissement->adresse;
        $this->email = $infos_etablissement->email;
        $this->site_web = $infos_etablissement->site_web;
        $this->type = $infos_etablissement->type;
        /**
         * informations personnelle de l'utilisateur connecter
         */
        $id_user_online = Auth::id();
        $user_online = User::where('id',$id_user_online)->first();
        $this->nom_user_online = $user_online->nom;
        $this->prenom_user_online = $user_online->prenom;
        $this->adresse_user_online = $user_online->adresse;
        $this->telephone_user_online = $user_online->telephone;
        $this->avatar_user_online = $user_online->avatar;
    }

    /**
     * on utilise la methode updated qui est appelle apres chague mis à jour d'un champs de saisie
     * et on gere la validation en temps réel
     */

    public function updated($field)
    {
        //on utilise validateOnly pour faire une validation etape par etape

        $this->validateOnly($field,[
            'nom' => 'required|string|min:2|max:50',
            'telephone' => 'required|digits_between:9,9|regex:/^[0-9]+$/',
            'adresse' => 'required|string|min:2',
            'email' => 'email|nullable',
            'site_web' => 'string|nullable',
            'type' => 'required|string',
        ]);
    } 

    /**
     * la methode update_infos_general est utiliser pour mettre à jour les informations de
     * l'etablissement
     */

    public function update_infos_general()
    {
       /**
        * on refait une validation avant de mettre à jour les informations de
        * l'etablissement
        */

        $this->validate([
            'nom' => 'required|string|min:2|max:50',
            'telephone' => 'required|digits_between:9,9|regex:/^[0-9]+$/',
            'adresse' => 'required|string|min:2',
            'email' => 'email|nullable',
            'site_web' => 'string|nullable',
            'type' => 'required|string'
        ]);
        
        /**
         * on met à jour les informations de l'etablissement
         */
        $update_infos_etablissement = Etablissement::where('id',1)->update([
            'nom' => $this->nom,
            'telephone' => $this->telephone,
            'adresse' => $this->adresse,
            'email' => $this->email,
            'site_web' => $this->site_web,
            'type' => $this->type
        ]);
        /**
         *Message de flash de succès du mis à jour des informations
         * de l'etablissement
         */
        session()->flash('msg_info_etablissement','Félicitations les informations ont été mise à jour avec succès');
       
    }

    public function render()
    {
       
        return view('livewire.infos-etablissement');
    }
}
