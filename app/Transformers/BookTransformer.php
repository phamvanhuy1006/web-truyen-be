<?php

namespace App\Transformers;

use App\Models\Book;
use League\Fractal\TransformerAbstract;

class BookTransformer extends TransformerAbstract
{

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Book $book)
    {
        $category = [
            'categoryId' => $book->category->id,
            'categoryName' => $book->category->name,
            'categorySlug' => $book->category->slug,
        ];
        
        return [
            'id' => $book->id,
            'name' => $book->name,
            'author' => $book->genresList,
            'category' => $category,
            'rating' => $book->rating,
            'slug' => $book->slug,
            'genresList' => $book->genresList,
            'description' => $book->description,
            'status' => $book->status,
            'totalChapters' => $book->chapters->count()
        ];
    }
}
