<?php

namespace App\Http\Services;
use App\Models\Book;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use App\Transformers\BookTransformer;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;

class BookService extends BaseService
{
    public function setModel()
    {
        $this->model = new Book();
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
		$books = collect($collection)->transformWith(new BookTransformer())
			->paginateWith(new IlluminatePaginatorAdapter($data));
		return $books;
    }
}
