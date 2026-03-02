<?php

use Illuminate\Support\Facades\Route;

Route::group(
    [
        'middleware' => 'auth:sanctum', 'namespace' => 'App\Modules\User\Controllers', 'prefix' => 'auth'
    ],
    function (){
        Route::group(['namespace' => 'User', 'as' => 'auth.'], function (){
            Route::post('register')->name('register');
            Route::post('login')->name('login');
        });
    }
);
