<?php

namespace App\Http\Controllers;

use App\Http\Requests\NiveauFormRequest;
use App\mes_models\Niveau;
use Illuminate\Http\Request;
use App\Traits\InfosUserThemeActive;
use MercurySeries\Flashy\Flashy;

class NiveauController extends Controller
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
        $this->InfosUser_AND_ThemeActive();
        $chemin_theme_actif = $this->chemin_theme_actif;
        $nom = $this->nom;
        $avatar = $this->avatar;
        $listes_niveaux = Niveau::all(); 
        return view('pages.niveaux.index',compact('chemin_theme_actif','nom','avatar','listes_niveaux'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->InfosUser_AND_ThemeActive();
        $chemin_theme_actif = $this->chemin_theme_actif;
        $nom = $this->nom;
        $avatar = $this->avatar;
        return view('pages.niveaux/create',compact('chemin_theme_actif','nom','avatar'));
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
            'nom_niveau' => 'required|unique:niveau,nom_niveau,except,id,options,'.$request->options
        ]);

        $insertion = Niveau::create([
                                      'nom_niveau' => $request->nom_niveau,
                                      'options' => $request->options
                                    ]);

        //message flash
        Flashy::success('La classe a été ajouter avec succès');
        //redirection
        return redirect()->route('niveaux.index');
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
    public function edit(Niveau $niveau)
    {
        //
        $this->InfosUser_AND_ThemeActive();
        $chemin_theme_actif = $this->chemin_theme_actif;
        $nom = $this->nom;
        $avatar = $this->avatar;
        return view('pages.niveaux/edit',compact('chemin_theme_actif','nom','avatar','niveau'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Niveau $niveau)
    {
        //
        $request->validate([
                             'nom_niveau' => 'required|unique:niveau,nom_niveau,except,id,options,'.$request->options
                          ]);
        $modification = Niveau::create([
                                         'nom_niveau' => $request->nom_niveau,
                                         'options' => $request->options
                                      ]);
        //message flash
        Flashy::success('La classe a été modifier avec succès');
        //redirection
        return redirect()->route('niveaux.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Niveau $niveau)
    {
        //
        $suppression = Niveau::where('id',$niveau->id)->delete();
        //message flash
        Flashy::success('La classe a été supprimer avec succès');
        //redirection
        return redirect()->route('niveaux.index');
    }
}
