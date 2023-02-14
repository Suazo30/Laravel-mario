<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\BookController as Book;
use App\Http\Controllers\Api\V1\ActorsController as Actors;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('books',[Book::class, 'index']);
Route::get('books/title={value}',[Book::class, 'getByTitle']);
Route::get('books/{id}',[Book::class, 'getById']);
Route::post('books',[Book::class, 'store']);
Route::delete('books/{id}',[Book::class, 'destroy']);
Route::put('books',[Book::class, 'update']);

// Route::get('actors',[Actors::class, 'index']);
// Route::get('actors/title={value}',[Actors::class, 'getByTitle']);
// Route::get('actors/{id}',[Actors::class, 'getById']);
// Route::pot('actors',[Actors::class, 'store']);
// Route::delete('actors/{id}',[Actors::class, 'destroy']);
// Route::put('actors',[Actors::class, 'update']);


