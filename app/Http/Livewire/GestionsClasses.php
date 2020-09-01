<?php

namespace App\Http\Livewire;

use App\mes_models\Annee;
use App\mes_models\Niveau;
use Livewire\Component;
use Livewire\WithPagination;
class GestionsClasses extends Component
{
    /**
     * WithPagination est un trait qui permet de faire
     * la pagination au niveau d'un composant
     */
    use WithPagination;

    public $CreateMode = false;
    public $UpdateMode = false;
    public $nom;
    public $branche;
    public $classe_id;
    public $par_page = 10;
    public $chercher;
    public $annees;
    public $annee_id;

    /**
     * la methode updatingChercher permet de revenir à la première page
     * des que l'utilisateur commence à faire une recherche
     */
    public function updatingChercher()
    {
        $this->resetPage();
    }
    public function hydrate()
    {
        //  dd("toto");
    }
    public function render()
    {
        $this->annees = Annee::all();

        return view('livewire.gestions-classes',[
            'classes' => Niveau::where('nom','like','%'.$this->chercher.'%')->orwhere('branche','like','%'.$this->chercher.'%')
                ->orderby('nom','asc')
                ->orderby('branche','asc')
               ->paginate($this->par_page),
        ]);
    }
    /**
     * on créer une fonction qui permet de vider les champs de saisie
     */
    private function resetInputFields()
    {
        $this->niveau = '';
        $this->branche = '';
    }
    /**
     * création d'une methode CreateMode qui permet
     * d'afficher le formulaire de création d'une
     * classe
     */
    public function form_create_classe()
    {
        
        // on active le formulaire de création
            $this->CreateMode = true;
    }
    /**
     * validation en temps réel avec la methode updated
     */
    public function updated($field)
    {
        $this->validateOnly($field,[
            // 'nom' => 'required|max:30|unique:niveaux,nom,'.$this->nom.',id,annee_id,'.$this->annee_id,
            'nom' => 'required|unique:niveaux,nom,except,id,annee_id,'.$this->annee_id.',branche,'.$this->branche,
            'branche' => 'required',
            'annee_id' => 'required'
            
        ]);
    }
    /**
     * creation de la methode store_classe qui permet
     * d'enregistrer une classe
     */
    public function store_classe()
    {
        $this->validate([
            // 'nom' => 'required|max:30|unique:niveaux,nom,'.$this->nom.',id,annee_id,'.$this->annee_id,
            // 'nom' => 'required|unique:niveaux,nom,except,id,annee_id,'.$this->annee_id,
            'nom' => 'required|unique:niveaux,nom,except,id,annee_id,'.$this->annee_id.',branche,'.$this->branche,
            'branche' => 'required',
            'annee_id' => 'required'
        ]);
        
        $insertion = Niveau::create([
            'nom' => $this->nom,
            'branche' => $this->branche,
            'annee_id' => $this->annee_id
        ]);
        
        /**
         * après la création d'une classe on desactive le 
         * formulaire de creation
         */
        $this->CreateMode = false;
        
        //message flash de succès de la création
        session()->flash('msg_succes_classe','Félicitations la classe a été ajouter avec succès');
        //on vide les champs de saisie
        $this->resetInputFields();
    }
    /**
     * création d'une methode edit qui permet d'afficher le
     * formulaire de modication et les informations a modifier
     * cette methode prend en paramètre un id
     */
    public function edit($id)
    {
        # code...
        $classe = Niveau::findOrFail($id);
        $this->classe_id = $id;
        $this->niveau = $classe->niveau;
        $this->branche = $classe->branche;

        $this->UpdateMode = true;
    }
    /**
     * création d'une methode annuler permettant d'annuler la création ou 
     * la modification d'une classe
     * quand on appelle la methode annuler on vient sur la page princale(index)
     */
    public function annuler()
    {
        /**
         * on desactive le mode de creation et le mode de modification
         */
        $this->UpdateMode = false;
        $this->CreateMode = false;
        /**
         * on vide les champs de saisie
         */
        $this->resetInputFields();
    }
    /**
     * création d'une methode update_classe permettant de mettre à jour
     * les informations d'une classe
     */
    public function update_classe()
    {
        /**
         * on fait une validation avant la mise à jour
         */
        $this->validate([
            'nom' => 'required|max:30|unique:niveaux,niveau,'.$this->classe_id,
            'branche' => 'required'
        ]);
        
        $classe = Niveau::find($this->classe_id);
        $classe->update([
            'nom' => $this->niveau,
            'branche' => $this->branche
        ]);
        /**
         * après la modification on desactive le mode update
         */
        $this->UpdateMode = false;
        /**
         * message flash de succès de modification
         */
        session()->flash('msg_succes_classe','Félicitions la classe a été mise à jour avec succès');
        /**
         * on vide les champs de saisie
         */
        $this->resetInputFields();
    }
    /**
     * on créer une methode delete permettant de supprimer
     * une classe
     */
    public function delete($id)
    {
        $suppression = Niveau::find($id)->delete();
        /**
         * message flash de succès de suppresion
         */
        session()->flash('msg_succes_classe','Félicitations la classe a été supprimer avec succès');
    }
}
