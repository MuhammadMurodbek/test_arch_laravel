<?php

namespace App\Modules\Auth\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Response;

/**
 * Class AuthenticateController
 */
class AuthenticateController
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke()
    {
        return $this->response(
            message: 'Unauthenticated',
            status: Response::HTTP_UNAUTHORIZED
        );
    }
}

