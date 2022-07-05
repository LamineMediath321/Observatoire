<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donnee extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'src',
        'type',
        'titre',
        'description',
        'status',
        'lieu'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
