<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\GenreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
    Route::post('/change-pass', [AuthController::class, 'changePassWord']);
});

Route::group(['prefix' => 'book'], function ($router) {
    Route::get('/getBookList', [BookController::class, 'index']);
    Route::get('/getBook', [BookController::class, 'show']);   
    Route::post('/createBook', [BookController::class, 'store']);
    Route::post('/updateBook', [BookController::class, 'update']);
    Route::post('/rating', [BookController::class, 'rating']);
});

Route::group(['prefix' => 'chapter'], function ($router) {
    Route::get('/getAllChapters', [ChapterController::class, 'index']);
    Route::get('/getChapter', [ChapterController::class, 'show']);
    Route::post('/createChapter', [ChapterController::class, 'store']);
    Route::post('/updateChapter', [ChapterController::class, 'update']);
});

Route::group(['prefix' => 'genre'], function ($router) {
    Route::get('/getGenreList', [GenreController::class, 'index']);
});

Route::group(['prefix' => 'collection'], function ($router) {
    Route::get('/getCollectionList', [CollectionController::class, 'index']);
});


Route::group(['prefix' => 'comment'], function ($router) {
    Route::get('/getCommentList', [CommentController::class, 'index']);
    Route::post('/createComment', [CommentController::class, 'store']);
});

Route::group(['prefix' => 'file'], function ($router) {
    Route::post('/uploadFile', [FileController::class, 'postUpload']);
});