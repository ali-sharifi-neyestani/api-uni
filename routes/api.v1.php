<?php

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/
Route::post('auth/register', 'UserController@register'); #step1 [email]
Route::post('auth/login', 'UserController@login'); #step1 [email]
Route::post('auth/active/code', 'UserController@activeWithCode'); // #step2 [email]



/*
|--------------------------------------------------------------------------
| Public
|--------------------------------------------------------------------------
*/
Route::prefix('posts')->group(function () {
    Route::get('/', 'PostController@index');
    Route::get('/{post:slug}', 'PostController@show');
});




/*
|--------------------------------------------------------------------------
| Users
|--------------------------------------------------------------------------
*/
Route::prefix('requests')->group(function () {
    Route::post('/', 'RequestController@store');
});



