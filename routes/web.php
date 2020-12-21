<?php


Route::get('posts', 'PostController@lists');
Route::get('posts/{id}', 'PostController@show');
Route::post('comments', 'CommentController@filter');

