<?php

namespace App\Http\Controllers;

use App\Traits\InfosUserThemeActive;
use Illuminate\Http\Request;
use App\mes_models\Annee;
use App\mes_models\Travailleur;

class TravailleurController extends Controller
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

        $all_travailleurs = Travailleur::all();

        return view('pages.travailleurs/index',compact('nom','avatar','chemin_theme_actif','annee_courante','all_annee','all_travailleurs'));
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

        return view('pages.travailleurs/create',compact('nom','avatar','chemin_theme_actif','annee_courante','all_annee'));
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
        * On vérifit si l'utilisateur à choisi une image de pour les travailleurs
        */
        if($request->file('image_travailleur'))
        {
            /**
             *  validation de l'image
             */
            $request->validate(['image_travailleur' => 'image|mimes:png,jpg,jpeg']);

            //extension de l'image
            $extension = $request->file('image_travailleur')->extension();

            //on donne un nom à l'image
            $image_name = time().'.'.$extension;

            //on déplace l'image vers le dossier travailleurs
            $request->file('image_travailleur')->storeAs('travailleurs',$image_name);
        }
        else
        {
            $image_name = 'image_travailleur.png';
        }

        $inscription = Travailleur::create([
                                             'nom' => $request->nom,
                                             'prenom' => $request->prenom,
                                             'contact' => $request->contact,
                                             'quartier' => $request->quartier,
                                             'image_travailleur' => $image_name
                                          ]);

        dd("inscription effectuer avec succès");
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
        if($request->file('image_travailleur'))
        {
            /**
            * Validation de l'upload d'image
            */
            $request->validate([
                'image_travailleur' => 'image|mimes:png,jpg,jpeg'
            ]);
            /**
             * on recupère l'extension de l'image
             */
            $extension = $request->file('image_travailleur')->extension();
            /**
             * on donne un nom à l'image en utilisant la fonction time()
             */
            $image_name = time().'.'.$extension;
            /**
             * on déplace l'image vers le dossier de destination
             */
            $request->file('image_travailleur')->storeAs('travailleurs',$image_name);
            /**
             * on fait une modification au niveau de la base de donnée du nom de l'image
             */
            $modification = Travailleur::where('id',$id)->update([
                                                                    'nom' => $request->nom,
                                                                    'prenom' => $request->prenom,
                                                                    'contact' => $request->contact,
                                                                    'quartier' => $request->quartier,
                                                                    'image_travailleur' => $image_name
                                                                ]);
        }
        else
        {
            $modification = Travailleur::where('id',$id)->update([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'contact' => $request->contact,
                'quartier' => $request->quartier
             ]);
        }

        dd("modif effectuer avec succès");

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
        $suppression = Travailleur::where('id',$id)->delete();

        dd("Suppression effectuer avec succès");
    }
}
