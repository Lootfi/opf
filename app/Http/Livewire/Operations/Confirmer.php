<?php

namespace App\Http\Livewire\Operations;

use App\Models\Immobilier;
use App\Models\Citoyen;
use App\Models\Operation;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Confirmer extends Component
{

    public $citoyens = null;
    public $propriété = null;
    protected $listeners = ['PropriétéChoisi', 'confirm'];

    public function PropriétéChoisi(Immobilier $propriété, array $propriétaires)
    {
        $ids = [];
        foreach ($propriétaires as  $propriétaire) {
            array_push($ids, $propriétaire['id']);
        }
        $this->citoyens = Citoyen::query()
            ->whereIn('id', $ids)
            ->get();
        $this->propriété = $propriété;
    }

    public function confirm()
    {
        Operation::create([
            'notaire_id' => auth()->user()->notaire->id,
            'responsable_id' => null,
            'proprietaire_id' => $this->citoyens[0]['id'],
            'immobilier_id' => $this->propriété->id
        ]);
    }
    public function render()
    {
        return view('livewire.operations.confirmer');
    }
}
