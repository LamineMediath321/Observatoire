<?php

namespace App\Models;

use App\Models\Forum;
use App\Models\Donnee;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'civilite',
        'profession',
        'typeStructure',
        'nomStructure',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**Un user possede plusieurs donnees*/
    public function donnees()
    {
        return $this->hasMany(Donnee::class);
    }

    /**Un user peut creer plusiuers  forum*/
    public function forums()
    {
        return $this->hasMany(Forum::class);
    }
}
