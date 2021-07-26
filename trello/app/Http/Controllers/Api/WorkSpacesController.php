<?php

namespace App\Http\Controllers\Api;

use App\Models\Workspace;
use Orion\Http\Controllers\Controller;

class WorkspacesController extends Controller
{
    protected $model = Workspace::class;

    /**
     * The relations that are allowed to be included together with a resource.
     *
     * @return array
     */
    public function includes() : array
    {
        return ['boards',
            'boards.cardsLists',
            'boards.cardsLists.cards'
            ];
    }


}
