<?php

namespace App\Http\Controllers;

use App\Actions\CreateUserAction;
use Illuminate\Http\Client\Request;

class CreateUserController
{
    public function __invoke(Request $request, CreateUserAction $action)
    {
        $action->handle();
    }
}
