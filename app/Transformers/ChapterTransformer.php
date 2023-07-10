<?php

namespace App\Transformers;

use App\Models\Chapter;
use League\Fractal\TransformerAbstract;

class ChapterTransformer extends TransformerAbstract
{

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Chapter $chapter)
    {
        return [
            'id' => $chapter->id,
            'name' => $chapter->name,
            'slug' => $chapter->slug,
            'chapterOrder' => $chapter->chapterOrder,
            'content' => $chapter->content,
            'bookId' => $chapter->bookId
        ];
    }
}
