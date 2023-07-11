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
        $rawData = json_decode($request->getContent());

        $comment = Comment::create([
            'content' => $rawData->content,
            'bookId' => $rawData->bookId,
            'commentator' => $rawData->commentator,
            'email' => $rawData->email,
        ]);

        return response()->json($comment, 200);
    }
}
