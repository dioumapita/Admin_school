<?php

namespace App\Http\Controllers;

use App\mes_models\RemboursementPiece;
use App\Traits\InfosUserThemeActive;
use Illuminate\Http\Request;
use App\mes_models\Annee;

class RemboursementPrixPieceController extends Controller
{
    use InfosUserThemeActive;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->InfosUser_AND_ThemeActive();

        $chemin_theme_actif = $this->chemin_theme_actif;
        $nom = $this->nom;
        $avatar = $this->avatar;
        $annee_courante = $this->annee_courante;
        $all_annee = Annee::all();

        $all_remboursements = RemboursementPiece::orderBy('id','desc')->with('client','piece')->get();

        return view('pages.remboursement_prix_piece/index',compact('nom','avatar','chemin_theme_actif','annee_courante','all_annee','all_remboursements'));
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
        $remboursement = RemboursementPiece::create([
                                                      'montant_rembourser' => $request->montant_rembourser,
                                                      'client_id' => $request->client_id,
                                                      'piece_id' => $request->piece_id
                                                    ]);
        dd("remboursement effectuez avec succès");
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

        $all_remboursements = RemboursementPiece::where('client_id',$id)->with('client','piece')->get();

        return view('pages.remboursement_prix_piece/show',compact('nom','avatar','chemin_theme_actif','annee_courante','all_annee','all_remboursements'));
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
        $modif_montant_rembourser = RemboursementPiece::where('id',$id)->update([
                                                                                  'montant_rembourser' => $request->montant_rembourser
                                                                                ]);
            dd("modification effectuez avec succès");
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
        $supp_remboursement = RemboursementPiece::where('id',$id)->delete();

        dd("suppression effectuez avec succès");
    }
}
