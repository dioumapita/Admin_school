<?php

namespace App\Http\Livewire;

use App\mes_models\Inscrit;
use Livewire\Component;
use Livewire\WithPagination;

class ListeEleveModeGrille extends Component
{
    use WithPagination;

    public $par_page = 3;
    public $recherche;
    
    public function render()
    {
        
        return view('livewire.liste-eleve-mode-grille',[
            'all_inscriptions' => Inscrit::where('date_inscription','like','%'.$this->recherche.'%')->paginate($this->par_page)
        ]);
    }
}
