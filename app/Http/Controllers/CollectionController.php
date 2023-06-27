<?php

namespace App\Http\Controllers;

use App\Http\Services\CollectionService;
use Illuminate\Http\Request;

class CollectionController extends BaseController
{
    public function __construct(CollectionService $collectionService)
    {
        $this->service = $collectionService;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
}
