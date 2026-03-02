<?php

namespace App\Modules\Auth\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Modules\Auth\Actions\RegisterUserAction;
use App\Modules\Auth\DTOs\RegisterUserDTO;
use App\Modules\Auth\Requests\RegisterRequest;
use App\Modules\Auth\Resources\UserDetailsResource;

class RegisterController
{
    /**
     * @param RegisterRequest $request
     * @param RegisterUserAction $action
     * @return \Illuminate\Http\JsonResponse
     * @throws \Spatie\DataTransferObject\Exceptions\UnknownProperties
     * @throws \Throwable
     */
    public function __invoke(RegisterRequest $request, RegisterUserAction $action)
    {
        dd('fdfdf');
        $user = $action->execute(new RegisterUserDTO($request->validated()));

        return $this->responseData(UserDetailsResource::make($user)->toArray());
    }
}
