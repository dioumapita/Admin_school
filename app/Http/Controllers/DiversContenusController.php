<?php

namespace App\Http\Controllers;

use App\Traits\InfosUserThemeActive;
use App\mes_models\Annee;
use App\mes_models\Arrivage;
use Illuminate\Http\Request;
use App\mes_models\Diver;

class DiversContenusController extends Controller
{
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
        $annee_courante = $this->annee_courante;
        $all_annee = Annee::all();
        $all_arrivages = Arrivage::all();

        $all_divers = Diver::all();
        $b = 1;
        $i = 1;
        return view('pages.divers/index',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_arrivages','all_divers','b','i'));
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
        $annee_courante = $this->annee_courante;
        $all_annee = Annee::all();
        $all_arrivages = Arrivage::all();
        return view('pages.divers.create',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_arrivages'));
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

       $enregistrement = Diver::create([
                                          'nom_divers' => $request->nom_divers,
                                          'prix' => $request->prix,
                                          'quantite' => $request->quantite,
                                          'arrivage_id' => $request->arrivage_id
                                      ]);
            return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        /**
         * Modification des divers
         */
        $modification = Diver::where('id',$id)->update([
                                                            'nom_divers' => $request->nom_divers,
                                                            'prix' => $request->prix,
                                                            'quantite' => $request->quantite,
                                                            'arrivage_id' => $request->arrivage_id
                                                      ]);
            return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        /**
         * Suppression des divers
         */
        $suppression = Diver::where('id',$id)->delete();

        return back();
    }

    /**
     * Divers par arrivage
     */
    public function divers_par_arrivage($id)
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
        $annee_courante = $this->annee_courante;
        $all_annee = Annee::all();
        $all_arrivages = Arrivage::all();

        $all_divers = Diver::where('arrivage_id',$id)->get();
        $b = 1;
        $i = 1;

        return view('pages.divers/divers_par_arrivage',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_arrivages','all_divers','b','i'));

    }
}
