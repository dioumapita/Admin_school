<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class OnlineAndOfflineUser extends Component
{

    public $all_users;

    public function mount()
    {
        $this->all_users = User::all()->take(10);
        
    }
    public function render()
    {
        return view('livewire.online-and-offline-user');
    }
}
