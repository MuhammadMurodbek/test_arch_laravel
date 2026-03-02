<?php

namespace App\Modules\Auth\Requests;

use App\Modules\User\Enums\Roles;
use App\Requests\BaseApiRequest;

/**
 * Class RegisterRequest
 */
class RegisterRequest extends BaseApiRequest
{
    /**
     * @return string[]
     */
    public function rules()
    {
        return [
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role'     => 'required|string|min:8',
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
            'name'     => [
                'description' => 'The name of the user.',
                'example'     => 'John Doe',
            ],
            'email'    => [
                'description' => 'The email of the user.',
                'example'     => 'john.doe@example.com',
            ],
            'password' => [
                'description' => 'The password of the user.',
                'example'     => 'password',
            ],
            'role'     => [
                'description' => 'The role of user',
                'example'     => Roles::values(),
            ],
        ];
    }
}
