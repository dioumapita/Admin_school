<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use MercurySeries\Flashy\Flashy;

class Deconnexion extends Component
{
    /**
     * Deconnexion de l'utilisateur
     */
    public function deconnexion()
    {
        /**
         * on recupère le nom complet de l'utilisateur pour le dire à bientôt
         */
       $nom_complet = Auth::user()->nom.' '.Auth::user()->prenom;
        Auth::logout();
        Flashy::primary('A très bientôt '.$nom_complet);
        return redirect()->route('index');
    }
    public function render()
    {
        return view('livewire.deconnexion');
    }
}
