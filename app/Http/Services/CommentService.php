<?php

namespace App\Http\Services;

use App\Models\Comment;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use App\Transformers\BookTransformer;
use App\Transformers\CommentTransformer;
use Illuminate\Http\Request;

class CommentService extends BaseService
{
    public function setModel()
    {
        $this->model = new Comment();
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
		$dataTransform = collect($collection)->transformWith(new CommentTransformer())
			->paginateWith(new IlluminatePaginatorAdapter($data));
		return $dataTransform;
    }

    public function store(Request $request)
    {
        $request->only($this->model->getFillable());

        $comment = Comment::create([
            'content' => $request->content,
            'bookId' => $request->bookId,
            'commentator' => $request->commentator,
            'emailCommentator' => $request->emailCommentator,
        ]);

        return response()->json([
            'status' => 200,
            'data' => $comment
        ]);
    }
}
