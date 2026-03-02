<?php

namespace App\Http\Controllers;

use App\Actions\CreateUserAction;
use App\Actions\GetUsersAction;

class GetAllUsersController
{
    public function handle(GetUsersAction $getUsersAction){
        $getUsersAction->handle();
    }
}
