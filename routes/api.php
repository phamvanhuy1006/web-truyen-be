<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CommentController;
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
    Route::post('/rating', [BookController::class, 'rating']);
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

