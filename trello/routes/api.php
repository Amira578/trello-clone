<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;
use App\Http\Controllers\Api\WorkspacesController;
use App\Http\Controllers\Api\BoardsController;
use App\Http\Controllers\Api\CardsListsController;
use App\Http\Controllers\Api\CardsController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['as' => 'api.'], function() {
    Orion::resource('workspaces', WorkspacesController::class);
    Orion::resource('boards', BoardsController::class);
    Orion::resource('cardsLists', CardsListsController::class);
    Orion::resource('cards', CardsController::class);

});
