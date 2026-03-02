<?php

namespace App\Modules\Auth\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class LogoutController
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request)
    {
        $request->user()->tokens()->delete();

        return $this->response('Logged out successfully');
    }
}

