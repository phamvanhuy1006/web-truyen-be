<?php

namespace App\Http\Controllers;

use App\Http\Services\ChapterService;
use Illuminate\Http\Request;

class ChapterController extends BaseController
{
    public function __construct(ChapterService $chapterService)
    {
        $this->service = $chapterService;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->service->store($request);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        return $this->service->update($request);
    }
}
