<?php

namespace App\Http\Livewire\Operations;

use App\Models\Operation;
use Livewire\Component;

class Show extends Component
{
    public $operation;

    public function validateOperation()
    {
        $this->operation->status = "Vérifié";
        $this->operation->save();
        $this->redirect('/operations');
    }

    public function refuseOperation()
    {
        $this->operation->status = "Refusé";
        $this->operation->save();
        $this->redirect('/operations');
    }

    public function render()
    {
        return view('livewire.operations.show');
    }
}
