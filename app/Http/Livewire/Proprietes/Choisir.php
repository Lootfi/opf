<?php

namespace App\Http\Livewire\Proprietes;

use App\Models\Citoyen;
use App\Models\Immobilier;
use Livewire\Component;

class Choisir extends Component
{
    public $id_proprietaire;
    public $propriétés;

    public function mount()
    {
        $this->propriétés = Citoyen::where('user_id', $this->id_proprietaire)->first()->proprietes;
    }

    public function choosePropriete(Immobilier $propriété)
    {
        $this->emit('PropriétéChoisi', $propriété, $propriété->proprietaires->all());
    }

    public function render()
    {
        return view('livewire.proprietes.choisir');
    }
}
