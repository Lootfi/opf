<?php

namespace App\Http\Livewire\Operations;

use App\Models\Immobilier;
use Livewire\Component;

class Confirmer extends Component
{

    protected $listeners = ['PropriétéChoisi'];

    public function PropriétéChoisi(Immobilier $propriété, array $propriétaires)
    {
        // dd($propriétaires);
    }
    public function render()
    {
        return view('livewire.operations.confirmer');
    }
}
