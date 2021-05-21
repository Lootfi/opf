<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Immobilier extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'commune', 'rue', 'numero', 'superficie_total', 'proprietaire_id'
    ];

    public function proprietaires()
    {
        return $this->belongsToMany(Citoyen::class, 'citoyen_immobiliers');
    }
}
