<?php

namespace App\Http\Services;

use App\Models\Chapter;
use App\Transformers\ChapterTransformer;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use Illuminate\Http\Request;

class ChapterService extends BaseService
{
    public function setModel()
    {
        $this->model = new Chapter();
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
        $dataTransform = collect($collection)->transformWith(new ChapterTransformer())
            ->paginateWith(new IlluminatePaginatorAdapter($data));
        return $dataTransform;
    }

    public function store(Request $request)
    {
        $rawData = json_decode($request->getContent());

        $chapter = Chapter::create([
            'name' => $rawData->name,
            'slug' => $rawData->slug,
            'chapterOrder' => $rawData->chapterOrder,
            'content' => $rawData->content,
            'bookId' => $rawData->bookId
        ]);

        return response()->json([
            'status' => 200,
            'data' => $chapter
        ]);
    }

    public function update(Request $request)
    {
        $rawData = json_decode($request->getContent());
        $chapter = Chapter::findOrFail($rawData->id);

        $fillableData = array_intersect_key($rawData, array_flip($chapter->getFillable()));
        $chapter->update($fillableData);
        
        return response()->json([
            'status' => 200,
            'data' => $chapter
        ]);
    }

	public function show(Request $request)
	{
        $request->only($this->model->getFillable());
		
		$chapter = Chapter::where([
			"bookId" => $request->bookId,
			"chapterOrder" => $request->chapterOrder
		])->get();

		return response()->json([
			'status' => 200,
			'data' => $chapter
		]);
	}
}
