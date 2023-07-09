<?php

namespace App\Transformers;

use App\Models\Book;
use App\Models\Genre;
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

        preg_match('/ratingPoint: (\d+)/', $book->rating, $ratingPointMatches);
        $ratingPoint = $ratingPointMatches[1];
        $slugsArray = explode(',', $book->slug);
        
        $genres = Genre::whereIn('slug', $slugsArray)->get();
        
        return [
            'id' => $book->id,
            'name' => $book->name,
            'author' => $book->author,
            'category' => $category,
            'rating' => $ratingPoint,
            'slug' => $book->slug,
            'genresList' => $genres,
            'description' => $book->description,
            'status' => $book->status,
            'totalChapters' => $book->chapters->count(),
            'bookCover' => $book->bookCover,
        ];
    }
}
    