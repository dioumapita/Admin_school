<?php

namespace App\Http\Livewire;

use App\mes_models\Annee;
use App\mes_models\Matiere;
use App\mes_models\Niveau;
use App\mes_models\Trimestre;
use Livewire\Component;

class GestionsNotes extends Component
{
    public $all_niveaux;
    public $id_niveau;
    public $niveau_choisi;
    public $all_matieres;
    public $all_trimestre;
    public $all_annee;
    public $matiere_choisi;
    public $trimestre_choisi;
    public $annee_choisi;

    public function mount()
    {
        $this->all_niveaux = Niveau::all();
    }
    public function updated()
    {
        $this->niveau_choisi = Niveau::where('id',$this->id_niveau)->first();
        $this->all_matieres = Niveau::where('id',$this->id_niveau)->first()->matieres;
        $this->all_trimestre = Trimestre::all();
        $this->all_annee = Annee::all();
        // dd($this->niveau_choisi);
    }
    public function store()
    {
      dd($_GET);
       dd($this->matiere_choisi);
    }
    public function render()
    {
        return view('livewire.gestions-notes');
    }
}
