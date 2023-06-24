<?php

namespace App\Http\Controllers;

use App\Http\Services\BookService;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends BaseController
{
    public function __construct(BookService $bookService)
    {
        $this->service = $bookService;
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
