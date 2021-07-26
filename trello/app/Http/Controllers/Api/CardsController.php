<?php



namespace App\Http\Controllers\Api;
use App\Models\Card;
use Orion\Http\Controllers\Controller;

class CardsController extends Controller
{
    protected $model = Card::class;
}
