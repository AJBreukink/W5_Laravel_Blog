<?php

Route::get('/', 'ArticlesController@index');

Route::get('/articles', 'ArticlesController@index');

Route::get('/articles/{article}', 'ArticlesController@show');

Route::get('/admin/addpost', 'ArticlesController@create');
Route::get('/admin/categories', 'CategoriesController@index');

Route::post('/articles', 'ArticlesController@store');

Route::post('/articles/{article}/comments', 'CommentsController@store');
