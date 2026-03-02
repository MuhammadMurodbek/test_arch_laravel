<?php

use Illuminate\Support\Facades\Route;

Route::group(
    [
        'middleware' => 'auth:sanctum', 'namespace' => 'App\Modules\Client\Controllers', 'prefix' => 'clients'
    ],
    function (){
        Route::group(['namespace' => 'Client', 'as' => 'clients.'], function (){
            Route::get('{client}/tasks')->name('clients-task');
        });
    }
);
