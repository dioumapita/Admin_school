<?php

namespace App\Http\Controllers;

use App\mes_models\Niveau;
use Illuminate\Http\Request;
use App\Traits\InfosUserThemeActive;
use App\mes_models\Note;
class NoteController extends Controller
{
    //
    /**
     * le trait InfosUserThemeActive contient deux:traits
     * 1-le trait permettant de selectionner les informations
     *   de l'utilisateur connecté
     * 2-le trait permettant de selectionner le theme activer
     */
    use InfosUserThemeActive;

    public function all_notes(Request $request)
    {
        $this->InfosUser_AND_ThemeActive();
        $chemin_theme_actif = $this->chemin_theme_actif;
        $nom = $this->nom;
        $avatar = $this->avatar;
        // $all_niveau = Niveau::all();

    //     $niveux = Niveau::first()->id;

    //    $notes = Note::whereIn('matiere_id',function($query)use($niveux){
    //          $query->from('matiere_niveau')->where('niveau_id', $niveux)->select('matiere_id')->get();
    //           })->with(['eleve','matiere','trimestre','annee'])->get();




        return view('pages.notes/index',compact('chemin_theme_actif','nom','avatar'));
    }

}
