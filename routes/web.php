<?php

Route::get('/', 'ArticlesController@index');

Route::get('/articles', 'ArticlesController@index');

Route::get('/articles/{article}', 'ArticlesController@show');

Route::get('/admin/addpost', 'ArticlesController@create');

Route::post('/articles', 'ArticlesController@store');
