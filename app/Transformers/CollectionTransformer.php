<?php

namespace App\Transformers;

use App\Models\Collection;
use League\Fractal\TransformerAbstract;

class CollectionTransformer extends TransformerAbstract
{

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Collection $collection)
    {
        return [
            'id' => $collection->id,
            'name' => $collection->name,
            'code' => $collection->code,
        ];
    }
}
