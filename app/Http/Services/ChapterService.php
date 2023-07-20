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

    public function index(Request $request)
    {
        $request->only($this->model->getFillable());
        $this->query->where('bookSlug', $request->bookSlug);
        return parent::index($request);
    }

    public function store(Request $request)
    {
        $rawData = json_decode($request->getContent());

        $chapter = Chapter::create([
            'name' => $rawData->name,
            'slug' => $rawData->slug,
            'chapterOrder' => $rawData->chapterOrder,
            'content' => $rawData->content,
            'bookSlug' => $rawData->bookSlug
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
            "bookSlug" => $request->bookSlug,
            "slug" => $request->slug,
        ])->first();

        if (!isset($chapter)) {
            return response()->json(
                ['message' => 'ChapterNotFound'],
                400
            );
        }

        $nextChapter = Chapter::where([
            "bookSlug" => $request->bookSlug,
            "chapterOrder" => $chapter->chapterOrder + 1
        ])->first();
        
        $previousChapter = Chapter::where([
            "bookSlug" => $request->bookSlug,
            "chapterOrder" => $chapter->chapterOrder - 1
        ])->first();

        $chapter = [
            ...$chapter->toArray(),
            'nextChapter' => $nextChapter->slug ?? '',
            'previousChapter' => $previousChapter->slug ?? '',
            "bookName" => $chapter->book->name
        ];

        return response()->json(
            $chapter,
            200
        );
    }
}
