<?php

namespace App\Http\Controllers;

use App\mes_models\Annee;
use App\mes_models\Eleve;
use App\mes_models\Inscrit;
use App\mes_models\Niveau;
use App\Traits\InfosUserThemeActive;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class EleveController extends Controller
{
     /**
     * le trait InfosUserThemeActive contient deux:traits
     * 1-le trait permettant de selectionner les informations
     *   de l'utilisateur connecté
     * 2-le trait permettant de selectionner le theme activer
     */
    use InfosUserThemeActive;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        /**
         * on appelle la methode InfosUser_AND_ThemeActive qui contient
         * le chemin du theme actif,le nom de l'utilisateur connecter,
         * la photo de profil de l'utilisateur connecter
         */
        $this->InfosUser_AND_ThemeActive();

        $chemin_theme_actif = $this->chemin_theme_actif;
        $nom = $this->nom;
        $avatar = $this->avatar;

        $all_inscriptions = Inscrit::all();
        /**
         * on selectionnne toutes les classes et les années scolaires
         */
        $all_classes = Niveau::all();
        $all_annees = Annee::all();
        $id_niveau = null;
        return view('pages.eleves/index',compact('chemin_theme_actif','nom','avatar','all_inscriptions','all_classes','all_annees','id_niveau'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         /**
         * on appelle la methode InfosUser_AND_ThemeActive qui contient
         * le chemin du theme actif,le nom de l'utilisateur connecter,
         * la photo de profil de l'utilisateur connecter
         */
        $this->InfosUser_AND_ThemeActive();

        $chemin_theme_actif = $this->chemin_theme_actif;
        $nom = $this->nom;
        $avatar = $this->avatar;
        /**
         * on selectionnne toutes les classes et les années scolaires
         */
        $all_classes = Niveau::all();
        $all_annees = Annee::all();

        return view('pages.eleves/create',compact('chemin_theme_actif','nom','avatar','all_classes','all_annees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         /**
          * validation des données
          */
        $request->validate([
                'matricule' => 'unique:eleve,matricule,except,id'
        ]);
        $ajout_eleve = Eleve::create([
            'matricule' => '670',
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'sexe' => $request->sexe,
            'date_naissance' => $request->date_naissance,
            'telephone' => $request->telephone,
            'quartier' => $request->quartier,
            'nom_parent' => $request->nom_parent,
            'prenom_parent' => $request->prenom_parent,
            'profession' => $request->profession,
            'telephone_parent' => $request->telephone_parent
        ]);
        
        $inscription = Inscrit::create([
                                          'date_inscription' => now(),
                                          'eleve_id' => $ajout_eleve->id,
                                          'niveau_id' => $request->classe,
                                          'annee_id' => $request->annee
                                       ]);
        
        //message flash
            Flashy::success('L\'eleve a été ajouter avec succès');
        //redirection vers la page d'acceuil
            return redirect()->route('eleve.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Eleve $eleve)
    {
        //
        /**
         * on appelle la methode InfosUser_AND_ThemeActive qui contient
         * le chemin du theme actif,le nom de l'utilisateur connecter,
         * la photo de profil de l'utilisateur connecter
         */
        $this->InfosUser_AND_ThemeActive();

        $chemin_theme_actif = $this->chemin_theme_actif;
        $nom = $this->nom;
        $avatar = $this->avatar;

        return view('pages.eleves/show',compact('chemin_theme_actif','nom','avatar','eleve'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Eleve $eleve)
    {
        //
        /**
         * on appelle la methode InfosUser_AND_ThemeActive qui contient
         * le chemin du theme actif,le nom de l'utilisateur connecter,
         * la photo de profil de l'utilisateur connecter
         */
        $this->InfosUser_AND_ThemeActive();

        $chemin_theme_actif = $this->chemin_theme_actif;
        $nom = $this->nom;
        $avatar = $this->avatar;
        
        $test = $eleve->inscrits()->first();
        /**
         * on selectionnne toutes les classes et les années scolaires
         */
        $all_classes = Niveau::all();
        $all_annees = Annee::all();

        return view('pages.eleves/edit',compact('chemin_theme_actif','nom','avatar','eleve','all_classes','all_annees','test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Eleve $eleve)
    {
        /**
         * modification des informations de l'élève
         */
        $modification_eleve = Eleve::where('id',$eleve->id)->update([
                                            'nom' => $request->nom,
                                            'prenom' => $request->prenom,
                                            'sexe' => $request->sexe,
                                            'date_naissance' => $request->date_naissance,
                                            'telephone' => $request->telephone,
                                            'quartier' => $request->quartier,
                                            'nom_parent' => $request->nom_parent,
                                            'prenom_parent' => $request->prenom_parent,
                                            'profession' => $request->profession,
                                            'telephone_parent' => $request->telephone_parent
                                        ]);
        /**
         * modification de l'inscription de l'élève dans niveau
         * ou une année scolaire
         */
        $niveau_id = $eleve->inscrits()->first()->niveau_id;
        $annee_id = $eleve->inscrits()->first()->annee_id;

        $modif = Inscrit::where('niveau_id',$niveau_id)->update([
            'niveau_id' => $request->classe,
            'annee_id' => $request->annee
        ]);
        
        dd("modification");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eleve $eleve)
    {
        //
        /**
         * suppression d'un eleve
         */
        // dd($eleve->inscrits()->first()->eleve_id);
        //suppression dans la table inscrit
        // $supp = Inscrit::where('eleve_id',$eleve->id)->delete();

        dd("suppression");
    }

    /**
     * Afficher les eleves par niveau
     */
    public function eleve_par_niveau($id)
    {
        /**
         * on appelle la methode InfosUser_AND_ThemeActive qui contient
         * le chemin du theme actif,le nom de l'utilisateur connecter,
         * la photo de profil de l'utilisateur connecter
         */
        $this->InfosUser_AND_ThemeActive();

        $chemin_theme_actif = $this->chemin_theme_actif;
        $nom = $this->nom;
        $avatar = $this->avatar;
        /**
        /**
         * Afficher les eleves par niveau
         */
        $all_inscriptions = Niveau::where('id',$id)->first()->inscrits;
         /**
         * on selectionnne toutes les classes et les années scolaires
         */
        $all_classes = Niveau::all();
        $all_annees = Annee::all();
        /**
         * on créer une variable id_niveau qui stock le niveau selectionner par l'utilisateur
         * pour pour le garder selectionner quand l'utilisateur le selectionne
         */
        $id_niveau = $id;
     return view('pages.eleves/index',compact('chemin_theme_actif','nom','avatar','all_inscriptions','all_classes','all_annees','id_niveau'));

    }
    /**
     * affichage des élèves en mode grille
     */

     public function eleve_mode_grille()
     {
          /**
         * on appelle la methode InfosUser_AND_ThemeActive qui contient
         * le chemin du theme actif,le nom de l'utilisateur connecter,
         * la photo de profil de l'utilisateur connecter
         */
        $this->InfosUser_AND_ThemeActive();

        $chemin_theme_actif = $this->chemin_theme_actif;
        $nom = $this->nom;
        $avatar = $this->avatar;
        
        return view('pages.eleves/eleves_mode_grille',compact('chemin_theme_actif','nom','avatar'));
     }

}
