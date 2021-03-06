<?php

namespace App\Http\Livewire;

use App\mes_models\Inscrit;
use App\mes_models\Matiere;
use App\mes_models\Niveau;
use App\mes_models\Note;
use Livewire\Component;

class ListesNotes extends Component
{
    public $all_niveaux;
    public $niveau;
    public $niveaux;
    public $inscrits;
    public $verifit;
    public $matiere;
    public $note_matiere;
    public $notes;

    public function mount()
    {
        $this->all_niveaux = Niveau::get();
        
        // $niv = Niveau::first();
    
        // $this->notes = Note::whereIn('matiere_id',function($query)use($niv){
        //      $query->from('matiere_niveau')->where('niveau_id',$niv->id)->select('matiere_id')->get();
        //  })->with(['eleve','matiere','trimestre','annee'])->get();
         
        //  return $this->notes;
    }
    
    // public function envoi()
    // {
    //     // dd($this->niveaux);
    //     $this->notes = Note::whereIn('matiere_id',function($query){
    //                 $query->from('matiere_niveau')->where('niveau_id',12)->select('matiere_id')->get();
    //             })->with(['eleve','matiere','trimestre','annee'])->get();
    // }
    
    public function updated()
    {
        // dd($this->niveaux);
       
        // $niveau = $this->niveaux;
        
       $this->notes = Note::whereIn('matiere_id',function($query){
            $query->from('matiere_niveau')->where('niveau_id', $this->niveaux)->select('matiere_id')->get();
        })->with(['eleve','matiere','trimestre','annee'])->get();

        // $this->niveaux = null;

        return $this->notes;
        
    }
    public function render()
    {
        
        
       
        
        return view('livewire.listes-notes');
    }
}
