<?php

namespace App\Models;

use App\Models\Commentaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Forum extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'theme',
        'description',

    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**Un forum est creee par un user */
    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
}
