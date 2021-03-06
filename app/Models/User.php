<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url', 'role'
    ];


    public function notaire()
    {
        return $this->hasOne(Notaire::class);
    }

    public function isNotaire()
    {
        return $this->notaire ? true : false;
    }

    public function responsable()
    {
        return $this->hasOne(Responsable::class);
    }

    public function isResponsable()
    {
        return $this->responsable ? true : false;
    }

    public function citoyen()
    {
        return $this->hasOne(Citoyen::class);
    }

    public function isCitoyen()
    {
        return $this->citoyen ? true : false;
    }

    public function getRoleAttribute()
    {
        if ($this->isCitoyen()) return 'citoyen';
        elseif ($this->isResponsable()) return 'responsable';
        else return 'notaire';
    }
}
