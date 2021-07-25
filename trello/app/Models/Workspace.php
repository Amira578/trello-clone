<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    use HasFactory;

    public function  user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function boards()
    {
        return $this->hasMany(\App\Models\Board::class);
    }
}
