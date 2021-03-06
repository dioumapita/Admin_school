<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mes_models\Annee;
use App\mes_models\Arrivage;
use App\mes_models\Category;
use App\mes_models\Piece;
use App\mes_models\Voiture;
use App\Traits\InfosUserThemeActive;
use App\mes_models\Commande;
use App\mes_models\Client;
use App\mes_models\VentePiece;
use Illuminate\Support\Facades\DB;

class VentePieceController extends Controller
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

        $all_categories = Category::all();
        $b = 1;
        $all_voitures = Voiture::all();
        $all_arrivages = Arrivage::all();

        $all_ventes = Commande::groupBy('client_id')->selectRaw('client_id')->where('status',1)->get();
        return view('pages.ventes_pieces/index',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_ventes','all_categories','b','all_voitures','all_arrivages'));

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

        $all_pieces = Piece::where('quantite','>',0)->get();

        $i = 1;

        return view('pages.ventes_pieces/create',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_pieces','i'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * Avant d'enregistre la vente on dimunuer la quantité du stock
         * du produit vendu en prenant la quantite acheter - la quantite
         * stocker
         */
        $quantite_stock = Piece::where('id',$request->piece_id)->first()->quantite;
        $quantite_restante = $quantite_stock - $request->quantite;
        $modif_quantite = Piece::where('id',$request->piece_id)->update([
                                                                          'quantite' => $quantite_restante
                                                                        ]);
        /**
         * on commence par enregistrer le client dans la base de donnée
         * on recupère son identifiant et l'identifiant du produit acheter
         * pour les stocer dans la table vente de pice
         */
        $client = Client::create([
                                    'nom_client' => $request->client,
                                    'contact_client' => $request->contact_client
                                ]);

       $vente = VentePiece::create([
                                      'prix_piece' => $request->prix_piece,
                                      'montant_payer' => $request->montant_payer,
                                      'quantite' => $request->quantite,
                                      'client_id' => $client->id,
                                      'piece_id' => $request->piece_id
                                   ]);

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

        $all_ventes = VentePiece::all();
        $all_categories = Category::all();
        $category_id = $id;

        return view('pages.ventes_pieces/show',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_ventes','all_categories','category_id'));

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
        /**
         * on modifit les informations du client qui à achéter la pièce
         */
        // $update_client = Client::where('id',$request->client_id)->update([
        //     'nom_client' => $request->client,
        //     'contact_client' => $request->contact_client
        // ]);
        // dd("bonjour");
        //
        // dd($request->piece_id);
        $remboursement = VentePiece::where('id',$id)->update([
                                                                'montant_rembourser' => $request->montant_rembourser
                                                            ]);

            dd("remboursement effectuer");
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
        $id_piece = VentePiece::where('id',$id)->first()->piece_id;
        // dd($id_piece);
        $quantite_stock = Piece::where('id',$id_piece)->first()->quantite;
        $quantite_vendue = VentePiece::where('id',$id)->first()->quantite;
        $modif_stock_piece = Piece::where('id',$id_piece)->update([
            'quantite' => $quantite_stock + $quantite_vendue
        ]);
        /**
         * Avant de supprimer une vente on doit remettre la quantite
         * qui a été achete au stock
         */
        $supp_vente = VentePiece::where('id',$id)->delete();

        dd("suppression");
    }

    public function credit_piece()
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

        $all_ventes = VentePiece::all();
        $all_categories = Category::all();
        $b = 1;
        return view('pages.ventes_pieces/credit',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_ventes','all_categories','b'));

    }
}
