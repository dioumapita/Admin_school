<?php

namespace App\Http\Controllers;

use App\mes_models\Annee;
use App\mes_models\Fournisseur;
use Illuminate\Http\Request;
use App\Traits\InfosUserThemeActive;
use MercurySeries\Flashy\Flashy;
class FournisseurController extends Controller
{
    /**
     * le trait InfosUserThemeActive contient deux:traits
     * 1-le trait permettant de selectionner les informations
     *   de l'utilisateur connecté
     * 2-le trait permettant de selectionner le theme activer
     */
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

        $all_fournisseurs = Fournisseur::all();
        $i = 1;
        $b = 1;

        return view('pages.fournisseurs/index',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_fournisseurs','i','b'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

        return view('pages.fournisseurs/create',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee'));
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
         * Avant de faire les traitements de l'image on verifit si l'utilisateur
         * à selectionner l'image
         */

        if($request->file('photo_fournisseur'))
        {
            /**
            * Validation de l'upload d'image
            */
            $request->validate([
                'photo_fournisseur' => 'image|mimes:png,jpg,jpeg'
            ]);
            /**
             * on récupère l'extension de l'image
             */
            $extension = $request->file('photo_fournisseur')->extension();
            /**
             * on donne un nom à l'image en utilisant la fonction time()
             */
            $image_name = time().'.'.$extension;
            /**
             * on déplace l'image vers le dossier de destination
             */
            $request->file('photo_fournisseur')->storeAs('fournisseurs',$image_name);
        }
        else
        {
            $image_name = 'default_image.png';
        }


        $save_fournisseur = Fournisseur::create([
                                                    'nom' => $request->nom,
                                                    'prenom' => $request->prenom,
                                                    'contact' => $request->contact,
                                                    'ville' => $request->ville,
                                                    'photo_fournisseur' => $image_name
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

        if($request->file('photo_fournisseur'))
        {
            /**
            * Validation de l'upload d'image
            */
            $request->validate([
                'photo_fournisseur' => 'image|mimes:png,jpg,jpeg'
            ]);
            /**
             * on recupère l'extension de l'image
             */
            $extension = $request->file('photo_fournisseur')->extension();
            /**
             * on donne un nom à l'image en utilisant la fonction time()
             */
            $image_name = time().'.'.$extension;
            /**
             * on déplace l'image vers le dossier de destination
             */
            $request->file('photo_fournisseur')->storeAs('fournisseurs',$image_name);
            /**
             * on fait une modification au niveau de la base de donnée du nom de l'image
             */
            $modification = Fournisseur::where('id',$id)->update([
                                                                    'nom' => $request->nom,
                                                                    'prenom' => $request->prenom,
                                                                    'contact' => $request->contact,
                                                                    'ville' => $request->ville,
                                                                    'photo_fournisseur' => $image_name
                                                                ]);
        }
        else
        {
            $modification = Fournisseur::where('id',$id)->update([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'contact' => $request->contact,
                'ville' => $request->ville
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
        $suppression = Fournisseur::where('id',$id)->delete();

        return back();
    }
}
