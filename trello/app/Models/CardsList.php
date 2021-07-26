<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardsList extends Model
{
    use HasFactory;

    public function board(){
        return $this->belongsTo(\App\Models\Board::class);
    }

    public function cards()
    {
        return $this->hasMany(\App\Models\Card::class);
    }
}
