<?php

namespace App\Http\Services;

use App\Models\Collection;
use App\Models\Comment;
use App\Transformers\CollectionTransformer;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use App\Transformers\CommentTransformer;
use Illuminate\Http\Request;

class CollectionService extends BaseService
{
    public function setModel()
    {
        $this->model = new Collection();
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
		$dataTransform = collect($collection)->transformWith(new CollectionTransformer())
			->paginateWith(new IlluminatePaginatorAdapter($data));
		return $dataTransform;
    }

    public function store(Request $request)
    {
        $request->only($this->model->getFillable());

        $collection = Collection::create([
            'name' => $request->name,
            'code' => $request->code,
        ]);

        return response()->json([
            'status' => 200,
            'data' => $collection
        ]);
    }
}
