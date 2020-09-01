<?php

namespace App\Http\Controllers;

use App\Http\Requests\MatiereFormRequest;
use App\mes_models\Associer;
use App\mes_models\Matiere;
use App\mes_models\Niveau;
use Illuminate\Http\Request;
use App\Traits\InfosUserThemeActive;
use Illuminate\Support\Arr;

class MatiereController extends Controller
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
        $all_matieres = Matiere::distinct()->get(['nom_matiere']);
        $all_classes = Niveau::all();
        return view('pages.matieres/index',compact('chemin_theme_actif','nom','avatar','all_matieres','all_classes'));
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
        $all_niveau = Niveau::all();
        return view('pages.matieres/create',compact('chemin_theme_actif','nom','avatar','all_niveau'));

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
        $request->validate([
            'nom_matiere' => 'required|string',
            'niveau' => 'required',
            'coefficient' => 'integer|min:1|max:4'
        ]);
        
        $matiere = Matiere::create($request->all());
        $matiere->niveaux()->attach($request->niveau,['coefficient' => $request->coefficient]);
       
        dd("matiere ajouter");
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $t =$_GET;
        $f = Arr::first($t);
        // dd($f);
        $matiere = Matiere::where('id',$id)->first();
        // dd($matiere);
        //
        $m = Matiere::where('id',$id)->first();
        $m->niveaux()->detach($f);
        // $m->niveaux()->delete();
        dd("suppression");
    }

    /**
     * utiliser pour afficher les par classe
     */
    public function matiere_par_classe($id)
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
        $niveau = Niveau::where('id',$id)->first();
        // $all_matieres = $niveau->with('matieres')->get();
        // // dd($all_matieres);
        $all_classes = Niveau::all();
        return view('pages.matieres/matiere_par_classe',compact('chemin_theme_actif','nom','avatar','niveau','all_classes'));
    }

}
