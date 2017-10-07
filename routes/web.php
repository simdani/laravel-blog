<?php

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', 'PostsController@index');
route::get('/posts/{post}', 'PostsController@show');
