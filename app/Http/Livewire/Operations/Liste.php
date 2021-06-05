<?php

namespace App\Http\Livewire\Operations;

use App\Models\Operation;
use Livewire\Component;

class Liste extends Component
{
    public $operations;

    public function mount()
    {
        switch (auth()->user()->role) {
            case 'citoyen':
                $this->operations = Operation::where('notaire_id', auth()->user()->citoyen->id)->get();
                break;

            case 'responsable':
                $this->operations = Operation::where('status', 'En attente')->get();
                break;

            case 'notaire':
                $this->operations = Operation::where('notaire_id', auth()->user()->notaire->id)->get();
                break;
        }
    }

    public function render()
    {
        return view('livewire.operations.liste');
    }
}
