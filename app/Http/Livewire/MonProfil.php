<?php

namespace App\Http\Livewire;


use App\User;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Livewire;
use Livewire\WithFileUploads;
class MonProfil extends Component
{
    use WithFileUploads;

    public $nom;
    public $prenom;
    public $email;
    public $username;
    public $telephone;
    public $date_naiss;
    public $date_format;
    public $civilite;
    public $adresse;
    public $biographie;
    public $avatar;
    public $nom_photo;
    /**
     * utilisation de la methode mount pour initialiser nos attributs
     * en les donnants les inforamtion de l'utilisateur connecté
     */
    public function mount()
    {   
       
        
        //on recupère l'identifiant de l'utilisateur connecté
        $id_user = Auth::id();
        //on recupère les informations de l'utilisateur connecté
        $info_user = User::where('id',$id_user)->first();
        //nos attributs recupère l'inforamtion de l'utilisateur connecté
        $this->nom = $info_user->nom;
        $this->prenom = $info_user->prenom;
        $this->email = $info_user->email;
        $this->username = $info_user->username;
        $this->telephone = $info_user->telephone;
        $this->date_naiss = $info_user->date_naiss;
        $this->civilite = $info_user->civilite;
        $this->adresse =  $info_user->adresse;
        $this->biographie = $info_user->biographie;
        $this->nom_photo = $info_user->avatar;
    }
    /**
     * la methode updated est appelé aprés chaque modification ou mis à jour d'un champs de saisie
     * validation en temps réel
     */
    public function updated($field)
    {
        $id_user = Auth::id();
        /**
         * on fait une validation en temps réels pour savoir si ce que l'utilisateur
         * à saisie est valide
         */
        $this->validateOnly($field,[
                'nom' => 'required|string|min:2|max:15',
                'prenom' => 'required|string|min:4|max:25',
                'email' => 'required|string|email|max:255|unique:users,email,'.$id_user,
                'username' => 'required|string|min:6|max:10|unique:users,username,'.$id_user,
                'telephone' => 'numeric|digits_between:9,9|regex:/^[0-9]+$/',
                'date_naiss' => 'date',
                'civilite' => 'string|max:12',
                'adresse' => 'string|max:15',
                'biographie' => 'string|max:255',
                'avatar' => 'image|mimes:png,jpg,jpeg|max:12288'
        ]);
        
    }
    /**
     * la methode save_photo_profil permet de gerer la photo de profil de 
     * l'utilisateur
     */
    public function save_photo_profil()
    {
        //on recupère l'identifiant de l'utilisateur connecter
        $id_user = Auth::id();

        $this->validate([
            'avatar' => 'required|image|mimes:png,jpg,jpeg|max:12288'
        ]);
        /**
         * on utilise la fonction time pour nommer l'image uploader par
         * l'utilisateur pour eviter de chevochement
         */
        $nom_photo = time().'.'.$this->avatar->extension();
        $this->avatar->storeAs('avatars',$nom_photo);
        /**
         * modification de la photo de profil par defaut
         */
        $update_photo_profil = User::where('id',$id_user)->update(['avatar' => $nom_photo]);

        //message flash
        session()->flash('msg_photo_profil','Félicitations votre photo de profil à été mise à jour');
        $this->reset('avatar');
    }
    /**
     * on modifit le profil de l'utilisateur connecter
     */
    public function  update_profil()
    { 
        //on recupère l'identifiant de l'utilisateur connecter
        $id_user = Auth::id();
        /**
         * on valide les données avant de les mettre à jour
         */
        $this->validate([
            'nom' => 'required|string|min:2|max:15',
            'prenom' => 'required|string|min:4|max:25',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id_user,
            'username' => 'required|string|min:6|max:10|unique:users,username,'.$id_user,
            'telephone' => 'present|digits_between:9,9|regex:/^[0-9]+$/|nullable',
            'date_naiss' => 'present|date|nullable',
            'civilite' => 'present|string|max:12|nullable',
            'adresse' => 'present|string|max:15|nullable',
            'biographie' => 'present|string|max:255|nullable'
        ]);

        $update_profil = User::where('id',$id_user)->update([
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'email' => $this->email,
            'username' => $this->username,
            'telephone' => $this->telephone,
            'date_naiss' => $this->date_naiss,
            'civilite' => $this->civilite,
            'adresse' => $this->adresse,
            'biographie' => $this->biographie
            
        ]);
        //on affiche un message de succès avec session autrement dit un message flash
        session()->flash('message','Félicitations votre profil à été mis à jour');
    }
    public function render()
    {
        
        /**
         * on verifit si l'utilisateur connecté à déjà choisi une date
         * de naissance si c'est le cas on format avec carbon la date 
         * en d/m/y pour l'afficher
         */
            $id_user = Auth::id();
            $info_user = User::where('id',$id_user)->first();
            $date = $info_user->date_naiss;
            if($date)
            {
                $this->date_format = Carbon::parse($date)->isoFormat('D/M/Y');
            }
        /**
         * on recupère le nouveau nom de l'image selectionner par l'utilisateur 
         * pour avoir une modification automatique
         */
            $this->nom_photo = $info_user->avatar;
        
        return view('livewire.mon-profil');
    }
}
