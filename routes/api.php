<?php

use App\Http\Controllers\CreateUserController;
use Illuminate\Support\Facades\Route;

Route::post('user/create', CreateUserController::class);
