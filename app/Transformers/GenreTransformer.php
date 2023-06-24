<?php

namespace App\Transformers;

use App\Models\Genre;
use League\Fractal\TransformerAbstract;

class GenreTransformer extends TransformerAbstract
{

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Genre $genre)
    {
        return [
            'id' => $genre->id,
            'name' => $genre->name,
            'code' => $genre->code,
        ];
    }
}
