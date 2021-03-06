<?php

namespace App\Http\Controllers;

use App\mes_models\Article;
use App\mes_models\Client;
use App\mes_models\Commande;
use App\mes_models\Annee;
use App\mes_models\Arrivage;
use App\mes_models\Facture;
use App\mes_models\Voiture;
use App\mes_models\PaiementClient;
use App\Traits\InfosUserThemeActive;
use Illuminate\Http\Request;
use NumberFormatter;

class CommandeController extends Controller
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

        if($request->voiture_id)
        {
            /**
             * Au niveau de la vente des voitures on verifit si le client existe déjà
             * si c'est le cas on continue la commande et au contraire on enregistre
             * d'abord le client
             */
            if($request->client_id)
            {

                /**
                 * On enregistre la commande du client et les témoin s'il existe
                */
                $new_commande = Commande::create([
                    'client_id' => $request->client_id,
                    'voiture_id' => $request->voiture_id,
                    'temoin_client' => $request->temoin_client,
                    'tel_temoin_client' => $request->tel_temoin_client,
                    'temoin_vendeur' => $request->temoin_vendeur,
                    'tel_temoin_vendeur' => $request->tel_temoin_vendeur
                ]);

                /**
                    * Après l'enregistrement de la commande on redirige l'utilisateur
                    * vers la page show (details des commande du client)
                */

                alert()->html('Achat effectuer',
                '   <div class="container">
                        <button class="btn btn-danger" data-toggle="modal" data-target="#nouveau">Continuez les achats</button>.
                        <a onclick="printDiv(\'facture\')" href="#" class="btn btn-primary"><i class="fa fa-print"></i> Imprimer </a>
                    </div>
                '
                ,'success')->showCancelButton($btnText = 'Détails des achats', $btnColor = '#aaa');

                return redirect()->route('commande.show',$request->client_id);
            }
            else
            {
                /**
                 * On enregistre d'abord le client
                 */
                /**
                 * On enregistre le client
                 */
                $new_client = Client::create([
                    'nom_client' => $request->client,
                    'contact_client' => $request->contact_client
                ]);
                /**
                 * On enregistre la facture du client
                 */
                $new_facture = Facture::create([
                    'client_id' => $new_client->id
                 ]);
                /**
                 * On enregistre la commande du client et les témoin s'il existe
                */
                $new_commande = Commande::create([
                    'client_id' => $new_client->id,
                    'voiture_id' => $request->voiture_id,
                    'temoin_client' => $request->temoin_client,
                    'tel_temoin_client' => $request->tel_temoin_client,
                    'temoin_vendeur' => $request->temoin_vendeur,
                    'tel_temoin_vendeur' => $request->tel_temoin_vendeur
                ]);

                /**
                    * Après l'enregistrement de la commande on redirige l'utilisateur
                    * vers la page show (details des commande du client)
                */

                alert()->html('Achat effectuer',
                '   <div class="container">
                        <button class="btn btn-danger" data-toggle="modal" data-target="#nouveau">Continuez les achats</button>.
                        <a onclick="printDiv(\'facture\')" href="#" class="btn btn-primary"><i class="fa fa-print"></i> Imprimer </a>
                    </div>
                '
                ,'success')->showCancelButton($btnText = 'Détails des achats', $btnColor = '#aaa');

                return redirect()->route('commande.show',$new_client->id);

            }

        }
        //
            /**
             * On verifit si le client exitait déjà  ou pas
             */
            if($request->client_id)
            {
                /**
                * On enregistre l'article commander par client
                */
                $new_article = Article::create([
                    'nom_article' => $request->nom_article,
                    'prix' => $request->prix,
                    'quantite' => $request->quantite,
                    'voiture_id' => $request->voitures_id,
                    'arrivage_id' => $request->arrivage_id
                ]);

                /**
                     * On enregistre la commande du client
                 */
                $new_commande = Commande::create([
                    'client_id' => $request->client_id,
                    'article_id' => $new_article->id,
                ]);

                /**
                    * Après l'enregistrement de la commande on redirige l'utilisateur
                    * vers la page show (details des commande du client)
                */

                    alert()->html('Achat effectuer',
                    '   <div class="container">
                            <button class="btn btn-danger" data-toggle="modal" data-target="#nouveau">Continuez les achats</button>.
                            <a onclick="printDiv(\'facture\')" href="#" class="btn btn-primary"><i class="fa fa-print"></i> Imprimer </a>
                        </div>
                    '
                    ,'success')->showCancelButton($btnText = 'Détails des achats', $btnColor = '#aaa');

                return redirect()->route('commande.show',$request->client_id);
            }
            else
            {
                /**
                  * On enregistre le client
                */
                $new_client = Client::create([
                    'nom_client' => $request->client,
                    'contact_client' => $request->contact
                ]);
                /**
                 * On enregistre la facture du client
                 */
                $new_facture = Facture::create([
                                                 'client_id' => $new_client->id
                                              ]);

                /**
                * On enregistre l'article commander par client
                */
                $new_article = Article::create([
                    'nom_article' => $request->nom_article,
                    'prix' => $request->prix,
                    'quantite' => $request->quantite,
                    'voiture_id' => $request->voitures_id,
                    'arrivage_id' => $request->arrivage_id
                ]);

                /**
                * On enregistre la commande du client
                */
                $new_commande = Commande::create([
                                'client_id' => $new_client->id,
                                'article_id' => $new_article->id,
                            ]);

                /**
                    * Après l'enregistrement de la commande on redirige l'utilisateur
                    * vers la page show (details des commande du client)
                */

                alert()->html('Achat effectuer',
                '   <div class="container">
                        <button class="btn btn-danger" data-toggle="modal" data-target="#nouveau">Continuez les achats</button>.
                        <a onclick="printDiv(\'facture\')" href="#" class="btn btn-primary"><i class="fa fa-print"></i> Imprimer </a>
                    </div>
                '
                ,'success')->showCancelButton($btnText = 'Détails des achats', $btnColor = '#aaa');

                return redirect()->route('commande.show',$new_client->id);

            }

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

        /**
         * on selectionne le client qui à commande
         */
        $client = Client::where('id',$id)->first();
        /**
         * on selectionne tous les arrivages et les voitures
         */
        $all_voitures = Voiture::all();
        $all_arrivages = Arrivage::all();
        $arrivages = Arrivage::all();
        $convertisseur = new NumberFormatter("fr", NumberFormatter::SPELLOUT);

        return view('pages.commandes/show',compact('chemin_theme_actif','nom','avatar','avatar','annee_courante','all_annee','all_voitures','all_arrivages','client','arrivages','convertisseur'));
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
        $article_id = Commande::where('id',$id)->first()->article_id;

        $update_article = Article::where('id',$article_id)->update([
                                                                    'nom_article' => $request->nom_article,
                                                                    'prix' => $request->prix,
                                                                    'quantite' => $request->quantite,
                                                                    'voiture_id' => $request->voitures_id,
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
        $suppression = Commande::where('id',$id)->delete();

        return back();
    }

    public function validation_commande(Request $request)
    {
        $client = Client::where('id',$request->client_id)->first();
        /**
         * On verifit si une des voitures commnde n'as pas été déjà acheter
         */
        foreach($client->commandes->where('voiture_id','!=',null) as $commande)
        {

            if($commande->voiture->status == 'vendue')
            {
                alert('Attention','Cette voiture a été déjà vendue','success')->addImage('/assets/asset_principal/img_sweat_alert/alert4.jpg')->autoclose(false);
                return back();
            }

        }
        /**
         * On modifit le status des voitures
         */
        foreach($client->commandes->where('voiture_id','!=',null) as $commande)
        {
            $commande->voiture->update(['status' => 'vendue']);
        }
        /**
         * On procède à la validation des commandes et au paiement et à la modification du status
         * des voitures en cas d'achats
         */
        $validation_commande = Commande::where('client_id',$client->id)->update(['status' => 1]);
        /**
         * Paiement
         */
        $paiement = PaiementClient::create([
                                                'montant_payer' => $request->montant_payer,
                                                'type_paiement' => $request->type_paiement,
                                                'delais_reliquat' => $request->delais_reliquat,
                                                'client_id' => $client->id
                                            ]);
        /**
         * Après ces traitement on redirige l'utilisateur vers les détails de ces commandes
         */

         return redirect()->route('details_achats_client',$client->id);

    }

    public function details_achats_client($id)
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
        $all_arrivages = Arrivage::all();
        $client = Client::where('id',$id)->first();

        $convertisseur = new NumberFormatter("fr", NumberFormatter::SPELLOUT);

        return view('pages.ventes/details_achats',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','client','all_voitures','all_arrivages','convertisseur'));
    }

    public function remboursement_dette(Request $request)
    {
        /**
         * Gestion du remboursement de dette des clients
         */
            $remboursement = PaiementClient::create([
                                                        'montant_payer' => $request->montant_payer,
                                                        'type_paiement' => $request->type_paiement,
                                                        'delais_reliquat' => $request->delais_reliquat,
                                                        'client_id' => $request->client_id
                                                    ]);

          return back();
    }

    /**
     * function permettant de gérer la modification des informations des témoins
     */
    public function update_infos_temoins(Request $request,$id)
    {
        $modif_temoins_commande = Commande::where('id',$id)->update([
                                                                        'temoin_client' => $request->temoin_client,
                                                                        'tel_temoin_client' => $request->tel_temoin_client,
                                                                        'temoin_vendeur' => $request->temoin_vendeur,
                                                                        'tel_temoin_vendeur' => $request->tel_temoin_vendeur
                                                                    ]);
        return back();
    }
}
