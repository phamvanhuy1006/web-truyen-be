<?php

namespace App\Http\Services;

use App\Models\Genre;
use App\Transformers\GenreTransformer;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;

class GenreService extends BaseService
{
    public function setModel()
    {
        $this->model = new Genre();
    }

    public function appendFilter()
	{
		// $user = Auth::user();
		// if ($user && $user->company_id) {
		// 	$this->query->where(['company_id' => $user->company_id]);
		// }
	}

    public function addQuery()
	{
		return $this->query;
	}

	public function setTransformers($data)
    {
        $collection = $data->getCollection();
		$dataTransform = collect($collection)->transformWith(new GenreTransformer())
			->paginateWith(new IlluminatePaginatorAdapter($data));
		return $dataTransform;
    }
}
