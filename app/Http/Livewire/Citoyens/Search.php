<?php

namespace App\Http\Livewire\Citoyens;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;

    protected $queryString = ['search'];
    public $nomCitoyen = '';
    public $search = '';
    public $citoyens;


    public function searchCitoyen()
    {
        $this->resetPage();
    }

    public function chooseCitoyen($citoyenId)
    {
        $this->emitUp('chooseCitoyen', ['id_citoyen' => $citoyenId]);
    }

    public function render()
    {
        if ($this->search != "")
            $this->citoyens = User::query()
                ->where('name', 'like', '%' . $this->search . '%')
                ->whereHas('citoyen')
                ->get();
        return view('livewire.citoyens.search');
    }
}
