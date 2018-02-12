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

Route::get('/articles', function () {
  $articles  = DB::table('articles')->get();

   return view('articles.index', compact('articles'));

});

Route::get('/articles/{article}', function ($id) {

  $article  = DB::table('articles')->find($id);



   return view('articles.show', compact('article'));

});
