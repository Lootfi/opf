<?php

namespace App\Http\Livewire\Clients;

use App\Models\Citoyen;
use Livewire\Component;

class Card extends Component
{
    public $client_id;
    public $client;

    protected $listeners = ['choisirClient'];


    public function choisirClient($clientId)
    {
        $this->client_id = $clientId;
        $this->setClient();
    }
    public function setClient()
    {
        $this->client = Citoyen::with('user')->where('user_id', $this->client_id)->first();
    }

    public function render()
    {
        return view('livewire.clients.card');
    }
}
