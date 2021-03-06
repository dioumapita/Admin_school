<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mes_models\Annee;
use App\mes_models\Arrivage;
use App\mes_models\Category;
use App\mes_models\Piece;
use App\mes_models\Voiture;
use App\Traits\InfosUserThemeActive;

class PieceController extends Controller
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

        $all_pieces = Piece::orderBy('id','desc')->get();
        $all_arrivages = Arrivage::all();
        $i = 1;
        $b = 1;

        return view('pages.pieces.index',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_pieces','i','all_arrivages','b'));
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

        $all_categories = Category::all();
        $all_voitures = Voiture::all();
        $all_arrivages = Arrivage::all();

        return view('pages.pieces.create',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_categories','all_voitures','all_arrivages'));
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
         * on verifit si l'utilisateur à  choisi une image si c'est le cas
         * on fait le traitement de l'image
         */
        if($request->file('image_piece'))
        {
            /**
             * validation de l'image
             */
            $request->validate(['image_piece' => 'image|mimes:png,jpg,jpeg']);
            //on récupère l'extension de l'image
            $extension = $request->file('image_piece')->extension();
            //on donne un nom à l'image avec la fonction time
            $image_name = time().'.'.$extension;
            //on déplace l'image vers la destination (images_pieces)
            $request->file('image_piece')->storeAs('pieces',$image_name);
        }
        else
        {
            /**
             * si l'utilisateur n'as pas selectionnez une image on prend l'image par défaut
             * donc image_name = image_piece
             */
            $image_name = 'image_piece';
        }

        $enregistrement = Piece::create([
                                          'nom_piece' => $request->nom_piece,
                                          'prix' => $request->prix,
                                          'quantite' => $request->quantite,
                                          'image_piece' => $image_name,
                                          'category_id' => $request->category_id,
                                          'voiture_id' => $request->voiture_id,
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
         * on doit s'assurer que l'utilisateur à bien selectionner une image pour faire
         * la modification au niveau de la base de donnée du nom de l'image
         */
        if($request->file('image_piece'))
        {
            /**
             * validation de l'image
             */
            $request->validate(['image_piece' => 'image|mimes:png,jpg,jpeg']);
            //on récupère l'extension de l'image
            $extension = $request->file('image_piece')->extension();
            //on donne un nom à l'image avec la fonction time
            $image_name = time().'.'.$extension;
            //on déplace l'image vers la destination (images_pieces)
            $request->file('image_piece')->storeAs('pieces',$image_name);

            $modification = Piece::where('id',$id)->update([
                'nom_piece' => $request->nom_piece,
                'prix' => $request->prix,
                'quantite' => $request->quantite,
                'image_piece' => $image_name,
                'category_id' => $request->category_id,
                'voiture_id' => $request->voiture_id,
                'arrivage_id' => $request->arrivage_id
             ]);
        }
        else
        {
            $modification = Piece::where('id',$id)->update([
                                                            'nom_piece' => $request->nom_piece,
                                                            'prix' => $request->prix,
                                                            'quantite' => $request->quantite,
                                                            'category_id' => $request->category_id,
                                                            'voiture_id' => $request->voiture_id,
                                                            'arrivage_id' => $request->arrivage_id
                                                        ]);
        }


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
       $suppression = Piece::where('id',$id)->delete();

       return back();
    }

    /**
     * Afficher les pièces par arrivage
     */
    public function piece_par_arrivage($id)
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

        $all_pieces = Piece::where('arrivage_id',$id)->get();
        $all_arrivages = Arrivage::all();
        $i = 1;
        $b = 1;

        return view('pages.pieces/piece_par_arrivage',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_pieces','i','all_arrivages','b'));
    }
}
