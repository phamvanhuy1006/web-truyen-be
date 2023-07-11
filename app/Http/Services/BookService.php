<?php

namespace App\Http\Services;

use App\Models\Book;
use App\Models\Chapter;
use App\Models\Genre;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use App\Transformers\BookTransformer;
use Illuminate\Http\Request;
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

	// public function index(Request $request)
	// {
	// 	$rawData = json_decode($request->getContent());


	//     return parent::index($rawData);
	// }

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

	public function store(Request $request)
	{
		$rawData = json_decode($request->getContent());

		$book = Book::create([
			'name' => $rawData->name,
			'author' => $rawData->author,
			'genresList' => $rawData->genresList,
			'categoryId' => $rawData->categoryId,
			'slug' => $rawData->slug,
			'bookCover' => $rawData->bookCover,
			'status' => $rawData->status,
			'rating' => 'quantity: 0, ratingPoint: 0'
		]);

		return response()->json([
			'status' => 200,
			'data' => $book
		]);
	}

	public function show(Request $request)
	{
		$request->only($this->model->getFillable());
		$book = Book::where('slug', $request->slug)->first();
		
		if (!$book) {
			return response()->json(['message' => 'Book not found'], 400);
		}

		$category = [
			'categoryId' => $book->category->id,
			'categoryName' => $book->category->name,
			'categorySlug' => $book->category->slug,
		];

		preg_match('/ratingPoint: (\d+)/', $book->rating, $ratingPointMatches);
		$ratingPoint = $ratingPointMatches[1];

		$genresArray = explode(',', $book->genresList);
		foreach ($genresArray as &$genre) {
			$genre = trim($genre);
		}
		$genres = Genre::whereIn('slug', $genresArray)->get();

		$booksByTheSameAuthor = Book::where('author', $book->author)->get(['slug', 'name']);

		$comments = $book->comments;

		$result = [
			'id' => $book->id,
			'name' => $book->name,
			'author' => $book->author,
			'booksByTheSameAuthor' => $booksByTheSameAuthor,
			'category' => $category,
			'rating' => $ratingPoint,
			'slug' => $book->slug,
			'genresList' => $genres,
			'description' => $book->description,
			'status' => $book->status,
			'chapter' => $book->chapters,
			'comments' => $comments,
			'totalChapters' => $book->chapters->count(),
			'bookCover' => $book->bookCover,
		];

		return response()->json($result, 200);
	}

	public function rating(Request $request)
	{
		$rawData = json_decode($request->getContent());
		$book = Book::findOrFail($rawData->bookId);
		$point = $rawData->point;

		$currentRating = $book->rating;
		// Extracting the quantity
		preg_match('/quantity: (\d+)/', $currentRating, $quantityMatches);
		$quantity = $quantityMatches[1];

		// Extracting the rating point
		preg_match('/ratingPoint: (\d+)/', $currentRating, $ratingPointMatches);
		$ratingPoint = $ratingPointMatches[1];

		$newRatingPoint = round(($ratingPoint * $quantity + $point) / ($quantity + 1), 2);
		$book->update([
			'rating' => 'quantity: ' . $quantity + 1 . ',ratingPoint: ' . $newRatingPoint
		]);

		return response()->json([
			'status' => 200,
			'data' => [
				"ratingPoint" => $newRatingPoint
			]
		]);
	}
}
