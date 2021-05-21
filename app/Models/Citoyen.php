<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citoyen extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function proprietes()
    {
        return $this->belongsToMany(Immobilier::class, 'citoyen_immobiliers');
    }

    // public function possessions()
    // {
    //     return $this->hasMany(Possession::class, 'citoyen_id', 'id');
    // }
}
