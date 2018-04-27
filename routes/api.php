<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/* http://127.0.0.1:8000/api/articles
 * All Articles*/
Route::get('articles','ArticleController@index');
/* http://127.0.0.1:8000/api/article/8
 * List Single Articles.*/
Route::get('article/{id}','ArticleController@show');
/* http://127.0.0.1:8000/api/article
 * {
	"title":"Title",
	"body":"Body"
   }
 * Create New Article.*/
Route::post('article','ArticleController@store');
/* http://127.0.0.1:8000/api/article *********with id*************
 * {
	"article_id":8,
	"title":"Updated Title",
	"body":"Updated Body"
   }
 * Update Article.*/
Route::put('article','ArticleController@store');
/* http://127.0.0.1:8000/api/article/8
 * Delete Article.*/
Route::delete('article/{id}','ArticleController@destroy');