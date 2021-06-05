<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $fillable = [
        'notaire_id',
        'responsable_id',
        'proprietaire_id',
        'immobilier_id',
        'client_id',
        'type',
        'debut_location',
        'fin_location'
    ];

    public function client()
    {
        return $this->belongsTo(Citoyen::class, 'client_id', 'id');
    }

    public function proprietaire()
    {
        return $this->belongsTo(Citoyen::class, 'proprietaire_id', 'id');
    }

    public function notaire()
    {
        return $this->belongsTo(Notaire::class, 'notaire_id', 'id');
    }

    public function responsable()
    {
        return $this->belongsTo(Responsable::class, 'responsable_id', 'id');
    }

    public function propriete()
    {
        return $this->belongsTo(Immobilier::class, 'immobilier_id', 'id');
    }
}
