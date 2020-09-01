<?php

namespace App\Http\Livewire;

use App\mes_models\Etablissement;
use Livewire\Component;
use Livewire\WithFileUploads;
class CachetEtablissement extends Component
{
    use WithFileUploads;

    public $cachet;
    public $nom_cachet;

    public function mount()
    {
        $infos = Etablissement::first();
        $this->nom_cachet = $infos->cachet;
    }
    /**
     * On fait une validation en temps réel
     */
    public function updated($field)
    {
        $this->validateOnly($field,[
            'cachet' => 'required|image|mimes:png,jpg,jpeg|max:12288'
        ]);
    }
    /**
     * la methode save_cachet permet d'enregister le cachet choisi par
     * l'utilisateur
     */
    public function save_cachet()
    {
        /**
         * on valide de nouveau avant de passe à la modification du cachet
         */

        $this->validate([
            'cachet' => 'required|image|mimes:png,jpg,jpeg|max:12288'
        ]);

        /**
         * on passe à la modification du cachet
         */

        $this->nom_cachet = time().'.'.$this->cachet->extension();
        $this->cachet->storeAs('cachets',$this->nom_cachet);

        $update_nom_cachet = Etablissement::where('id',1)->update([
                'cachet' => $this->nom_cachet
        ]);
        
        /**
         * message flash de succès
         */
          session()->flash('msg_cachet','Félicitations le cachet a été changer avec succès');
    }
    public function render()
    {
        return view('livewire.cachet-etablissement');
    }
}
