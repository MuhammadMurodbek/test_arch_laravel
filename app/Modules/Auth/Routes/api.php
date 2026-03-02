<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::namespace('App\Modules\Auth\Http\Controllers\Api')
    ->prefix('auth')
    ->middleware('throttle:3,1')
    ->group(function (
) {
    Route::post('register', 'RegisterController')->name('register');
    Route::post('login', 'LoginController');

    Route::get('login', 'AuthenticateController')->name('login');

//    Route::middleware(['auth:sanctum'])
//        ->group(function () {
//            Route::post('logout', 'LogoutController')->name('logout');
//            Route::get('/user', function (Request $request) {
//                return $request->user();
//            });
//        });
});

