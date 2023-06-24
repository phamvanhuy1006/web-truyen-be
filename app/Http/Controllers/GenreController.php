<?php

namespace App\Http\Controllers;

use App\Http\Services\GenreService;
use Illuminate\Http\Request;

class GenreController extends BaseController
{
    public function __construct(GenreService $genreService)
    {
        $this->service = $genreService;
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
