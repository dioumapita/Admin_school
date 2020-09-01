<?php

namespace App\Http\Livewire;

use App\mes_models\Etablissement;
use Livewire\Component;
use Livewire\WithFileUploads;
class LogoEtablissement extends Component
{
    use WithFileUploads;

    public $logo;
    public $nom_logo;

    public function mount()
    {
        $infos = Etablissement::first();
        $this->nom_logo = $infos->logo;
        // dd($this->nom_logo);
    }
    public function updated($field)
    {
        $this->validateOnly($field,[
            'logo' => 'required|image|mimes:png,jpg,jpeg|max:12288'
        ]);
    }

    public function logo()
    {
        $this->validate([
            'logo' => 'required|image|mimes:png,jpg,jpeg|max:12288'
        ]);
        $this->nom_logo = time().'.'.$this->logo->extension();
        $this->logo->storeAs('logos',$this->nom_logo);
        
        $update_logo = Etablissement::where('id',1)->update([
            'logo' => $this->nom_logo
        ]);
        
        session()->flash('msg_logo','Félicitations le logo a été changer avec succès');
    }
    public function render()
    {
        return view('livewire.logo-etablissement');
    }
}
