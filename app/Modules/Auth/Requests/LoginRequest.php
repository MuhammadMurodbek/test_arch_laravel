<?php

namespace App\Modules\Auth\Requests;

use App\Requests\BaseApiRequest;

/**
 * Class LoginRequest
 */
class LoginRequest extends BaseApiRequest
{
    /**
     * @return string[]
     */
    public function rules()
    {
        return [
            'email'    => 'required|email',
            'password' => 'required',
        ];
    }

    /**
     * Get the body parameters for the request.
     *
     * @return array
     */
    public function bodyParameters(): array
    {
        return [
            'email'    => [
                'description' => 'The email of the user.',
                'example'     => 'john.doe@example.com',
            ],
            'password' => [
                'description' => 'The password of the user.',
                'example'     => 'password',
            ],
        ];
    }
}
