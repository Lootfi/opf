<?php

namespace App\Http\Livewire\Operations;

use App\Models\Operation;
use Livewire\Component;

class Show extends Component
{
    public $operation;

    public function validateOperation()
    {
        $this->operation->status = "verifie";
        $this->operation->responsable_id = auth()->user()->id;

        if ($this->operation->type != 'louer') {
            $citoyenImmobilier = $this->operation->propriete->middleman;

            $citoyenImmobilier->citoyen_id = $this->operation->client_id;

            $citoyenImmobilier->save();
        }


        $this->operation->save();

        $this->redirect('/operations');
    }

    public function refuseOperation()
    {
        $this->operation->status = "refuse";
        $this->operation->responsable_id = auth()->user()->id;

        $this->operation->save();

        $this->redirect('/operations');
    }

    public function render()
    {
        return view('livewire.operations.show');
    }
}
