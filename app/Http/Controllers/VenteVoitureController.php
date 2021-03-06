<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mes_models\Annee;
use App\mes_models\VenteVoiture;
use App\mes_models\Voiture;
use App\Traits\InfosUserThemeActive;
use App\mes_models\Client;
use Alert;
class VenteVoitureController extends Controller
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

        // $all_ventes = VenteVoiture::orderBy('id','desc')->with('client','voiture')->get();
        $all_ventes = VenteVoiture::groupBy('client_id','voiture_id')->selectRaw('sum(montant_payer) as montant_total,client_id,voiture_id')->with('client','voiture')->get();



        return view('pages.ventes_voitures/index',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_ventes'));
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

        $all_voitures = Voiture::where('status','envente')->get();
        $client = null;

        return view('pages.ventes_voitures/create',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_voitures','client'));
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
         * On enregistre d'abord le client
         */
        $client = Client::create([
            'nom_client' => $request->client,
            'contact_client' => $request->contact_client
        ]);
        /**
         * on modifie le status de la voiture pour dire que la voiture à été vendue
         */
        $update_status = Voiture::where('id',$request->voiture_id)->update([
                                                                             'status' => 'vendue'
                                                                            ]);
        /**
         * On enregistre la vente dans la table ventevoiture
         */
       $new_vente = VenteVoiture::create([
                                           'montant_payer' => $request->montant_payer,
                                           'voiture_id' => $request->voiture_id,
                                           'client_id' => $client->id,
                                           'temoin_acheteur' => $request->temoin_acheteur,
                                           'contact_temoin_acheteur' => $request->contact_temoin_acheteur,
                                           'temoin_vendeur' => $request->temoin_vendeur,
                                           'contact_temoin_vendeur' => $request->contact_temoin_vendeur
                                        ]);
        /**
         * On procède au paiement
         */




            dd("vente effectuer avec succès");
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
         * On verifit si on modifit un montant payer au compte de la voiture
         */
           if($request->client_id)
           {
                /**
                * on modifit le prix payé par le client
                */
                $modif_vente = VenteVoiture::where('id',$id)->update([
                    'montant_payer' => $request->montant_payer
                ]);
                dd("modification effectuer");
           }
        /**
         * on modifit les informations du client qui à achéter la voiture
         */
        $update_client = Client::where('id',$request->client_id)->update([
            'nom_client' => $request->client,
            'contact_client' => $request->contact_client
        ]);
        /**
         * on modifit le prix payé par le client
         */
        $modif_vente = VenteVoiture::where('id',$id)->update([
                                                               'montant_payer' => $request->montant_payer
                                                            ]);
        dd("modification effecuter avec succès");
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
         * on gère l'annulation de vente quand un utilisateur annule une vente on doit retrouver
         * le status de voiture envente
         */
        /**
         * on modifit le status de la voiture en envente au lieu de vendu
         */
        $modif_status_voiture = Voiture::where('id',$id)->update(['status' => 'envente']);
        /**
         * annulation de la vente
         */
        $annulation = VenteVoiture::where('voiture_id',$id)->delete();

        dd("annulation avec succès");
    }

    public function credit_voiture()
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

        $all_ventes = VenteVoiture::groupBy('client_id','voiture_id')->selectRaw('sum(montant_payer) as montant_total,client_id,voiture_id')->with('client','voiture')->get();

        return view('pages.ventes_voitures/credit',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_ventes'));
    }
    /**
     * historique de paiement des voitures
     */
    public function historique_paiement($id)
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

        /**
         * on selectionne tous les paiements qui sont liès à la voiture acheter par
         * l'utilisateur.Comme une voiture n'est acheter que par un et un seul client
         */
        $all_historiques = VenteVoiture::where('voiture_id',$id)->with('client','voiture')->get();

        return view('pages.ventes_voitures/historique_paiement',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_historiques'));
    }

    public function delete_paiement(Request $request,$id)
    {
         /**
         * avant de faire l'annulation on verifit si c'est le dernier paiement concernant cette voiture
         */
        if(VenteVoiture::where('voiture_id',$request->voiture_id)->count() == 1)
        {
            /**
             * si c'est le dernier paiement concernant la voiture on modifit le status de la voiture
             */
            $modif_status_voiture = Voiture::where('id',$request->voiture_id)->update(['status' => 'envente']);
            /**
             * on annule le paiement
             */
            $annulation_paiement = VenteVoiture::where('id',$id)->delete();
            dd("annulation finale");
        }
        else
        {
            $annulation_paiement = VenteVoiture::where('id',$id)->delete();
        }

        dd("suppression effectuer avec succès");
    }

    /**
     * Vente de voiture à un client qui à déjà acheter une piece
     */
    public function client_achat_voiture($id)
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

        $all_voitures = Voiture::where('status','envente')->get();
        $client = Client::where('id',$id)->first();

        return view('pages.ventes_voitures/create',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_voitures','client'));
    }
}
