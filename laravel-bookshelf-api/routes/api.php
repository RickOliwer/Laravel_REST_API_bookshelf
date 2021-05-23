<?php

use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\GenresController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResource('/authors', AuthorsController::class);
Route::apiResource('/books', BooksController::class);
Route::apiResource('/genres', GenresController::class);

Route::group(['prefix' => 'books'], function(){
    Route::apiResource('/{book}/genres', GenresController::class);
    Route::apiResource('/{book}/authors', AuthorsController::class);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
