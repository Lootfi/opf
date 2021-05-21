<?php

namespace App\Http\Livewire\Citoyens;

use App\Models\Citoyen;
use Livewire\Component;

class Card extends Component
{
    public $citoyen_id;
    public $citoyen;

    public function mount()
    {
        $this->citoyen = Citoyen::with('user')->where('user_id', $this->citoyen_id)->first();
    }
    public function render()
    {
        return view('livewire.citoyens.card');
    }
}
