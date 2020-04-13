<?php


/*
|--------------------------------------------------------------------------
| Post
|--------------------------------------------------------------------------
|
|
*/
Route::prefix('posts')->group(function () {
    Route::get('/', 'PostController@index');
    Route::get('/{post:slug}', 'PostController@show');
});


