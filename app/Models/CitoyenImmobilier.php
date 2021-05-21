<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitoyenImmobilier extends Model
{
    use HasFactory;

    public function immobilier()
    {
        return $this->belongsTo(Immobilier::class, 'immobilier_id', 'id');
    }

    public function proprietaires()
    {
        return $this->belongsTo(Citoyen::class, 'citoyen_id', 'id');
    }
}
