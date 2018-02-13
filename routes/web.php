<?php

Route::get('/', 'ArticlesController@index');

Route::get('/articles', 'ArticlesController@index');

Route::get('/articles/{article}', 'ArticlesController@show');
