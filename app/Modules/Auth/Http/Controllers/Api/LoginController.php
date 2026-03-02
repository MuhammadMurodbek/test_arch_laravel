<?php

namespace App\Modules\Auth\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Modules\Auth\Actions\LoginUserAction;
use App\Modules\Auth\Requests\LoginRequest;
use App\Modules\User\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class LoginController
{
    /**
     * @param LoginRequest $request
     * @param LoginUserAction $action
     * @return \Illuminate\Http\JsonResponse
     * @throws \Spatie\DataTransferObject\Exceptions\UnknownProperties
     * @throws \Throwable
     */
    public function __invoke(LoginRequest $request, LoginUserAction $action)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return $this->response(
                message: 'The provided credentials are incorrect.',
                status: Response::HTTP_UNAUTHORIZED
            );
        }

        return $this->responseData([$user->createToken('auth_token')->plainTextToken]);
    }
}

