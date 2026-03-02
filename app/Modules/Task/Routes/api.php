<?php

use Illuminate\Support\Facades\Route;

Route::group(
    [
        'middleware' => 'auth:sanctum', 'namespace' => 'App\Modules\Task\Controllers', 'prefix' => 'tasks'
    ],
    function (){
        Route::group(['namespace' => 'Task', 'as' => 'tasks.'], function (){
            Route::get('/')->name('get-tasks');
        });
    }
);
