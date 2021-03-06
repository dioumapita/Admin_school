<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnneeFormRequest;
use App\mes_models\Annee;
use Illuminate\Http\Request;
use App\Traits\InfosUserThemeActive;
use Illuminate\Support\Facades\Cache;
use MercurySeries\Flashy\Flashy;

class AnneeController extends Controller
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
 
        // $chemin_theme_actif = $this->chemin_theme_actif;
        // $nom = $this->nom;
        // $avatar = $this->avatar;
        // $liste_annees = Annee::all();
        /**
         * on selectionne les années scolaire et on les stocke dans la variable liste_annees
         */
        // $liste_annees = Annee::all();
        // Cache::put('info',$this->InfosUser_AND_ThemeActive());
        // Cache::put('chemin_theme_actif',$chemin_theme_actif = $this->chemin_theme_actif);
        // Cache::put('nom',$nom = $this->nom);
        // Cache::put('avatar',$avatar = $this->avatar);
        // Cache::put('list_annees', $liste_annees = Annee::all());

        $chemin_theme_actif = Cache::remember('theme',10,function(){
            return $this->chemin_theme_actif;
        });
        $liste_annees = Cache::remember('annee',10,function(){
            return Annee::all();
        });
        $nom = Cache::remember('nom',10,function(){
            return $this->nom;
        });
        $avatar = Cache::remember('avatar',10,function(){
            return $this->avatar;
        });
       
        return view('pages.annees/index',compact('chemin_theme_actif','nom','avatar','liste_annees'));
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
 
        // $chemin_theme_actif = $this->chemin_theme_actif;
        // $nom = $this->nom;
        // $avatar = $this->avatar;

        // Cache::put('info',$this->InfosUser_AND_ThemeActive());
        // Cache::put('chemin_theme_actif',$chemin_theme_actif = $this->chemin_theme_actif);
        // Cache::put('nom',$nom = $this->nom);
        // Cache::put('avatar',$avatar = $this->avatar);
        $chemin_theme_actif = Cache::remember('theme',10,function(){
            return $this->chemin_theme_actif;
        });
        $nom = Cache::remember('nom',10,function(){
            return $this->nom;
        });
        $avatar = Cache::remember('avatar',10,function(){
            return $this->avatar;
        });

        return view('pages.annees/create',compact('chemin_theme_actif','nom','avatar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnneeFormRequest $request)
    {
        /**
         * on verifit si la différence entre le debut est la fin de l'année
         * est égal à 1 si c'est le cas l'annee est valide dans le cas 
         * contraire l'année est invalide on redirige l'utilisateur vers
         * la page precedente
         */
        // dd($request->all());
        if($request->fin_annee-$request->debut_annee == 1)
        {
            $insertion = Annee::create([
                'debut_annee' => $request->debut_annee,
                'fin_annee' => $request->fin_annee,
                'annee_scolaire' => $request->debut_annee.'-'.$request->fin_annee
            ]);

            Flashy::primary('L\'année scolaire à été ajouter avec success');

            return redirect()->route('annees.index');
        }
        else
            {
                return back();
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Annee $annee)
    {
        //
        /**
         * on appelle la methode InfosUser_AND_ThemeActive qui contient
         * le chemin du theme actif,le nom de l'utilisateur connecter,
         * la photo de profil de l'utilisateur connecter
         */
        $this->InfosUser_AND_ThemeActive();

        $this->InfosUser_AND_ThemeActive();
 
        $chemin_theme_actif = $this->chemin_theme_actif;
        $nom = $this->nom;
        $avatar = $this->avatar;
        
        return view('pages.annees.edit',compact('chemin_theme_actif','nom','avatar','annee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annee $annee)
    {
        //
        /**
         * on fait une validation de l'année scolaire
         */
        $request->validate([
            'debut_annee' => 'required|date_format:Y|different:fin_annee|unique:annee,debut_annee,'.$annee->id,
            'fin_annee' => 'required|date_format:Y|gt:debut_annee|different:debut_annee|unique:annee,fin_annee,'.$annee->id
        ]);
        /**
         * on verifit si la différence entre le debut est la fin de l'année
         * est égal à 1 si c'est le cas l'annee est valide dans le cas 
         * contraire l'année est invalide on redirige l'utilisateur vers
         * la page precedente
         */
        if($request->fin_annee - $request->debut_annee == 1)
        {
            $modification = Annee::where('id',$annee->id)->update([
                'debut_annee' => $request->debut_annee,
                'fin_annee' => $request->fin_annee,
                'annee_scolaire' => $request->debut_annee.'-'.$request->fin_annee
            ]);

            Flashy::primary('L\'année scolaire à été ajouter avec success');
            return redirect()->route('annees.index');
            // dd("modification");
        }
        else
            {
                return back();
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annee $annee)
    {
        //
        // dd("toto");
        Cache::put('suppression',Annee::where('id',$annee->id)->delete());
        //  $suppression = Annee::where('id',$annee->id)->delete();
        Flashy::primary('L\'année scolaire à été ajouter avec success');
            return redirect()->route('annees.index');
    }

    /**on crée une methode permettant de selectionner l'année active
     * autrementdit l'année scolaire selectionner par l'utilisateur
     */

    public function annee_active($id)
    {
        //on desactive l'année scolaire qui a pour status 1
        $desactivation_annee = Annee::where('status',1)->update(['status' => 0]);
        //on active l'année scolaire selectionner par l'utilisateur
        
        $activation_annee = Annee::where('id',$id)->update(['status' => 1]);

        $annee_scolaire = Annee::where('id',$id)->first();

        alert('Bienvenue','Dans l\'année scolaire '.$annee_scolaire->annee_scolaire.'.','success')->addImage('/assets/asset_principal/img_sweat_alert/user.png')->timerProgressBar();
        return redirect()->route('home');
    }
}
