<?php

namespace App\Http\Livewire\Operations;

use App\Models\Citoyen;
use App\Models\Immobilier;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Inscrire extends Component
{
    public $id_proprietaire = null;
    public $id_client = null;

    protected $listeners = ['chooseCitoyen', 'choisirClient', 'PropriétéChoisi'];


    public function chooseCitoyen($params)
    {
        $this->id_proprietaire = $params['id_citoyen'];
    }

    public function choisirClient($clientId)
    {
        dd($clientId);
        $this->id_client = $clientId;
    }

    public function PropriétéChoisi(Immobilier $propriété, array $proprietaires)
    {
        // 
    }

    public function reset_proprietaire()
    {
        $this->id_proprietaire = null;
    }
    public function reset_client()
    {
        $this->id_client = null;
    }

    public function render()
    {
        return view('livewire.operations.inscrire');
    }
}
