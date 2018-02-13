<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Article;

Route::get('/articles', function () {

  $articles = Article::all();

   return view('articles.index', compact('articles'));

});

Route::get('/articles/{article}', function ($id) {



$article = Article::find($id);

   return view('articles.show', compact('article'));

});
