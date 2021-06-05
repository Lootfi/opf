<?php

namespace App\Http\Livewire\Operations;

use App\Models\Citoyen;
use App\Models\Immobilier;
use App\Models\Operation;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Inscrire extends Component
{
    use WithPagination;

    protected $queryString = ['search'];
    public $proprietaire, $propriétés, $propriété;
    public $client;
    public $search, $citoyens;
    public $type = 'vente';
    public $debut_location, $fin_location;

    public function confirmOperation()
    {
        switch ($this->type) {
            case 'louer':
                Operation::create([
                    'type' => $this->type,
                    'debut_location' => $this->debut_location,
                    'fin_location' => $this->fin_location,
                    'notaire_id' => auth()->user()->notaire->id,
                    'responsable_id' => null,
                    'proprietaire_id' => $this->proprietaire->id,
                    'immobilier_id' => $this->propriété->id,
                    'client_id' => $this->client->id,
                    'status' => 'en attente'
                ]);
                break;

            default:
                Operation::create([
                    'type' => $this->type,
                    'notaire_id' => auth()->user()->notaire->id,
                    'responsable_id' => null,
                    'proprietaire_id' => $this->proprietaire->id,
                    'immobilier_id' => $this->propriété->id,
                    'client_id' => $this->client->id,
                    'status' => 'en attente'
                ]);
                break;
        }

        $this->redirect('/operations');
    }


    public function mount()
    {
        $this->debut_location = date('Y-m-d');
    }

    public function searchCitoyen()
    {
        $this->resetPage();
    }

    public function chooseProprietaire(User $proprietaire)
    {
        $this->proprietaire = $proprietaire->citoyen;
        $this->propriétés = $this->proprietaire->proprietes;
        $this->search = "";
        $this->citoyens = null;
    }

    public function chooseClient(User $client)
    {
        $this->client = $client->citoyen;
        $this->search = "";
        $this->citoyens = null;
    }


    public function choosePropriete(Immobilier $propriété)
    {
        $this->propriété = $propriété;
    }


    public function reset_proprietaire()
    {
        $this->id_proprietaire = null;
    }
    public function reset_client()
    {
        $this->id_client = null;
    }

    public function confirm()
    {
        $this->emitTo('operations.confirmer', 'confirm');
    }

    public function render()
    {
        if ($this->search != "") {
            if ($this->propriété) {
                $this->citoyens = User::query()
                    ->where('id', '!=', $this->proprietaire->user->id)
                    ->where('name', 'like', '%' . $this->search . '%')
                    ->whereHas('citoyen')
                    ->get();
            } else {
                $this->citoyens = User::query()
                    ->where('name', 'like', '%' . $this->search . '%')
                    ->whereHas('citoyen')
                    ->get();
            }
        } else {
            $this->citoyens = [];
        }

        return view('livewire.operations.inscrire');
    }
}
