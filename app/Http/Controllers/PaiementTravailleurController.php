<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mes_models\Annee;
use App\mes_models\Travailleur;
use App\mes_models\PaiementTravailleur;
use App\Traits\InfosUserThemeActive;
class PaiementTravailleurController extends Controller
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
        $all_travailleurs = Travailleur::all();

        return view('pages.paiement_travailleurs/create',compact('nom','avatar','chemin_theme_actif','annee_courante','all_annee','all_travailleurs'));
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
        $enregistrement = PaiementTravailleur::create([
                                                        'montant_payer' => $request->montant_payer,
                                                        'type_paiement' => $request->type_paiement,
                                                        'travailleur_id' => $request->travailleur_id
                                                     ]);
            dd("paiement effectuer avec succès");
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

        $historiques_paiements = PaiementTravailleur::where('travailleur_id',$id)->with('travailleur')->get();
        $infos = PaiementTravailleur::where('travailleur_id',$id)->with('travailleur')->first();

        return view('pages.paiement_travailleurs.show',compact('nom','avatar','chemin_theme_actif','annee_courante','all_annee','historiques_paiements','infos'));
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
        $modification = PaiementTravailleur::where('id',$id)->update([
                                                                        'montant_payer' => $request->montant_payer,
                                                                        'type_paiement' => $request->type_paiement
                                                                     ]);
            dd("modification effectuer");
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
        $suppression = PaiementTravailleur::where('id',$id)->delete();

        dd("suppression");
    }
}
