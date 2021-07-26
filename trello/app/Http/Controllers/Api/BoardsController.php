<?php

namespace App\Http\Controllers\Api;

use App\Models\Board;
use Orion\Http\Controllers\Controller;

class BoardsController extends Controller
{
    protected $model = Board::class;
}

