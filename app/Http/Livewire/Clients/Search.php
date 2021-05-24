<?php

namespace App\Http\Livewire\Clients;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;

    protected $queryString = ['search'];
    public $search = '';
    public $clients;


    public function searchClient()
    {
        $this->resetPage();
    }

    public function chooseClient($clientId)
    {
        $this->emitTo('clients.card', 'choisirClient', $clientId);
    }

    public function render()
    {
        if ($this->search != "")
            $this->clients = User::query()
                ->where('name', 'like', '%' . $this->search . '%')
                ->whereHas('citoyen')
                ->get();
        return view('livewire.clients.search');
    }
}
