<?php

namespace App\Http\Controllers;

use App\Http\Services\CommentService;
use Illuminate\Http\Request;

class CommentController extends BaseController
{
   
    public function __construct(CommentService $commentService)
    {
        $this->service = $commentService;
    }

    public function store(Request $request)
    {
        return $this->service->store($request);
    }

    public function update(Request $request, $id)
    {
        return $this->service->update($request, $id);
    }
}
