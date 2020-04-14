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

Route::prefix('requests')->group(function () {
    Route::post('/', 'RequestController@store');
});

