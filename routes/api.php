<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;





/*
|--------------------------------------------------------------------------
| Dev tools
|--------------------------------------------------------------------------
|
*/
Route::group([
    'namespace'  => 'Dev',
    'prefix'     => 'v1/dev',
], function ($router) {
    require base_path('routes/dev.php');
});

