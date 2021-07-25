<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    public function workspace()
    {
      return $this->belongsTo(\App\Models\Workspace::class);
    }
}
