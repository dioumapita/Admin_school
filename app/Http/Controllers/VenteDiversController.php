<?php

namespace App\Http\Controllers;

use App\mes_models\Client;
use App\mes_models\Diver;
use Illuminate\Http\Request;
use App\mes_models\VenteDiver;
use App\Traits\InfosUserThemeActive;
use App\mes_models\Annee;

class VenteDiversController extends Controller
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
        /**
         * On affiche la liste des ventes
         */
        $all_ventes = VenteDiver::orderBy('id','desc')->get();

        return view('pages.ventes_divers/index',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_ventes'));
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
        /**
         * on selectionne les divers disponible en vente(dont la quantite est > 0)
         */
        $all_divers = Diver::where('quantite','>',0)->get();

        $i = 1;

        return view('pages.ventes_divers.create',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_divers','i'));
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
         * Avant d'enregistre la vente on dimunuer la quantité du stock
         * du produit vendu en prenant la quantite acheter - la quantite
         * stocker
         */

         $quantite_stock = Diver::where('id',$request->divers_id)->first()->quantite;
         $quantite_restante = $quantite_stock - $request->quantite;

         $modif_stock = Diver::where('id',$request->divers_id)->update([
                                                                         'quantite' => $quantite_restante
                                                                       ]);
        /**
         * on enregistre le client qui a achetér le divers
         */
        $client = Client::create([
                                    'nom_client' => $request->client,
                                    'contact_client' => $request->contact_client
                                ]);
        /**
         * On enregistre maintenant la vente
         */
        $vente = VenteDiver::create([
                                      'montant_payer' => $request->montant_payer,
                                      'quantite' => $request->quantite,
                                      'client_id' => $client->id,
                                      'divers_id' => $request->divers_id
                                    ]);

            dd("vente enregistrer avec succès");
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
         * Modification de la vente
         * l'ors de la modification de la vente on doit pouvoir modifier
         * les informations du client qui à achéter le produit,
         * le montant qu'il a payer
         */

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
    }
}
