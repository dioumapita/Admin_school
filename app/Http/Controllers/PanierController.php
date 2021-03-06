<?php

namespace App\Http\Controllers;

use App\mes_models\Client;
use App\mes_models\Panier;
use App\Traits\InfosUserThemeActive;
use Illuminate\Http\Request;
use App\mes_models\Annee;
use App\mes_models\PaiementClient;
use App\mes_models\Voiture;

class PanierController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->client_id)
        {
            $panier = Panier::create([
                'piece' => $request->nom_piece,
                'prix' => $request->prix,
                'quantite' => $request->quantite,
                'voiture_id' => $request->voiture_id,
                'client_id' => $request->client_id
            ]);

                alert()->html('Achat effectuer',
            '   <div class="container">
                    <button class="btn btn-danger" data-toggle="modal" data-target="#nouveau">Continuez les achats</button>.
                    <button class="btn btn-primary">Imprimer La Facture</button>
                </div>
            '
            ,'success')->showCancelButton($btnText = 'Détails des achats', $btnColor = '#aaa');

            return redirect()->route('panier.show',$request->client_id);
        }
        else
        {
            /**
            * on commence par enregistrer le client
           */
            $new_client = Client::create([
                                        'nom_client' => $request->client,
                                        'contact_client' => $request->contact
                                    ]);
            /**
             * on enregistre le produits dans le panier
             */

            $panier = Panier::create([
                                    'piece' => $request->nom_piece,
                                    'prix' => $request->prix,
                                    'quantite' => $request->quantite,
                                    'voiture_id' => $request->voiture_id,
                                    'client_id' => $new_client->id
                                ]);

            alert()->html('Achat effectuer',
            '
                <button class="btn btn-danger" data-toggle="modal" data-target="#nouveau">Continuez les achats</button>.
                <button class="btn btn-primary">Imprimer La Facture</button>
                 <button class="btn btn-primary">Valider les achats</button>
                '
            ,'success')->persistent(true,false);

            return redirect()->route('panier.show',$new_client->id);
        }
        //
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

        $client = Client::where('id',$id)->first();
        $all_voitures = Voiture::all();

        return view('pages.panier/show',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','client','all_voitures'));

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

        $update = Panier::where('id',$id)->update([
                                                        'piece' => $request->nom_piece,
                                                        'prix' => $request->prix,
                                                        'quantite' => $request->quantite,
                                                        'voiture_id' => $request->voiture_id
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

        $supp = Panier::where('id',$id)->delete();

        return back();
    }

    /**
     * Validation des achats:l'ors de la validation des achats on enregistre les montant payer
     * par client et on modifie le status en validation qui signifit que la vente à été valider
     */
    public function validation_vente(Request $request)
    {
        /**
         * on procède à la validation de la vente
         */
        $validation_vente = Panier::where('client_id',$request->client_id)->update(['status' => 'valider']);
        /**
         * Aprés la validation de la vente on enregistre le montant payer par le client dans la table
         * paiement
         */
        $paiement = PaiementClient::create([
                                            'montant_payer' => $request->montant_payer,
                                            'type_paiement' => $request->type_paiement,
                                            'client_id' => $request->client_id
                                          ]);
        return back();
    }
    /**
     * Détails des ventes: cette partie permet de voire les détails d'une vente,
     * d'effectuer des impressions(attestation,reconnaissance,reçu,facture)
     * d'effectuer des remboursements, de modifier la vente ainsi de la supprimer
     */

     public function details_vente($id)
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
        $all_voitures = Voiture::all();
        $client = Client::where('id',$id)->first();


        return view('pages.ventes.show',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','client','all_voitures'));
     }

     public function test()
     {
         return view('pages.test.test');
     }
}
