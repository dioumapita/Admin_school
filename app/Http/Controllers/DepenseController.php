<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mes_models\Annee;
use App\Traits\InfosUserThemeActive;
use App\mes_models\Depense;
use App\mes_models\Arrivage;
class DepenseController extends Controller
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
        $all_depenses = Depense::all();

        $i = 1;
        $b = 1;

        return view('pages.depenses/index',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_arrivages','i','b','all_depenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
       $enregistrement = Depense::create([
                                             'nom_depense' => $request->nom_depense,
                                             'montant' => $request->montant,
                                             'date_depense' => $request->date_depense,
                                             'arrivage_id' => $request->arrivage_id
                                        ]);

        dd("enregistrement");
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
        $modification = Depense::where('id',$id)->update([
                                                            'nom_depense' => $request->nom_depense,
                                                            'montant' => $request->montant,
                                                            'date_depense' => $request->date_depense,
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

        $suppression = Depense::where('id',$id)->delete();

        return back();
    }

    /**
     * Dépense par arrivage
     */
    public function depense_par_arrivage($id)
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
        $all_depenses = Depense::where('arrivage_id',$id)->get();

        $i = 1;
        $b = 1;

        return view('pages.depenses/depense_par_arrivage',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_arrivages','all_depenses','i','b'));
    }
}
