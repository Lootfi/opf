<?php

namespace App\Http\Livewire\Operations;

use App\Models\Citoyen;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Inscrire extends Component
{
    public $id_proprietaire = null;

    protected $listeners = ['chooseCitoyen'];


    public function chooseCitoyen($params)
    {
        $this->id_proprietaire = $params['id_citoyen'];
    }

    public function reset_proprietaire()
    {
        $this->id_proprietaire = null;
    }

    public function render()
    {
        return view('livewire.operations.inscrire');
    }
}
