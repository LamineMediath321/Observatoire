<?php

namespace App\Models;

use App\Models\User;
use App\Models\Forum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    /**Un commentaire appartient a un user */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**Un commentaire appartient a un forum */
    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }
}
