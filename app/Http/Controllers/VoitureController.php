<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\InfosUserThemeActive;
use MercurySeries\Flashy\Flashy;
use App\mes_models\Annee;
use App\mes_models\Arrivage;
use App\mes_models\Fournisseur;
use App\mes_models\Voiture;

class VoitureController extends Controller
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

        $all_voitures = Voiture::orderBy('arrivage_id','asc')->get();
        $all_fournisseurs = Fournisseur::all();
        $all_arrivages = Arrivage::all();

        $b = 1;

        return view('pages.voitures.index',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_voitures','all_fournisseurs','all_arrivages','b'));
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

        $all_fournisseurs = Fournisseur::all();
        $all_arrivages = Arrivage::all();

        return view('pages.voitures.create',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_fournisseurs','all_arrivages'));
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

        if($request->file('image_voiture'))
        {

            $request->validate([
                'image_voiture' => 'image|mimes:png,jpg,jpeg'
            ]);
            /**
             * on récupère l'extension de l'image
             */
            $extension = $request->file('image_voiture')->extension();
            /**
             * on donne un nom à l'image en utilisant la fonction time()
             */
            $image_name = time().'.'.$extension;
            /**
             * on déplace l'image vers le dossier de destination
             */
            $request->file('image_voiture')->storeAs('voitures',$image_name);
        }
        else
        {
            $image_name = 'image_voiture.png';
        }

        $enregistrement = Voiture::create([
                                            'immatriculation' => $request->immatriculation,
                                            'nom_voiture' => $request->nom_voiture,
                                            'image_voiture' => $image_name,
                                            'kilometrage' => $request->kilometrage,
                                            'prix' => $request->prix,
                                            'description' => $request->description,
                                            'fournisseur_id' => $request->fournisseur_id,
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
    public function show(Voiture $Voiture)
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



        return view('pages.voitures.show',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','Voiture'));
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
        if($request->file('image_voiture'))
        {
            $request->validate([
                'image_voiture' => 'image|mimes:png,jpg,jpeg'
            ]);
            /**
             * on récupère l'extension de l'image
             */
            $extension = $request->file('image_voiture')->extension();
            /**
             * on donne un nom à l'image en utilisant la fonction time()
             */
            $image_name = time().'.'.$extension;
            /**
             * on déplace l'image vers le dossier de destination
             */
            $request->file('image_voiture')->storeAs('voitures',$image_name);

            $modification = Voiture::where('id',$id)->update([
                                                                'immatriculation' => $request->immatriculation,
                                                                'nom_voiture' => $request->nom_voiture,
                                                                'image_voiture' => $image_name,
                                                                'kilometrage' => $request->kilometrage,
                                                                'prix' => $request->prix,
                                                                'description' => $request->description,
                                                                'fournisseur_id' => $request->fournisseur_id,
                                                                'arrivage_id' => $request->arrivage_id,
                                                                'status' => 'envente',
                                                            ]);
        }
        else
        {
            $modification = Voiture::where('id',$id)->update([
                                                                'immatriculation' => $request->immatriculation,
                                                                'nom_voiture' => $request->nom_voiture,
                                                                'kilometrage' => $request->kilometrage,
                                                                'prix' => $request->prix,
                                                                'description' => $request->description,
                                                                'fournisseur_id' => $request->fournisseur_id,
                                                                'arrivage_id' => $request->arrivage_id,
                                                                'status' => 'envente',
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
       $suppression = Voiture::where('id',$id)->delete();

       return back();
    }

    /**
     * Afficher les voitures par arrivage
     */
    public function voiture_par_arrivage($id)
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

        $all_voitures = Voiture::where('arrivage_id',$id)->get();
        $all_fournisseurs = Fournisseur::all();
        $all_arrivages = Arrivage::all();

        $b = 1;

        $arrivage_choisi = Arrivage::where('id',$id)->first();

        return view('pages.voitures/voiture_par_arrivage',compact('chemin_theme_actif','nom','avatar','annee_courante','all_annee','all_voitures','all_fournisseurs','all_arrivages','b','arrivage_choisi'));
    }
}
