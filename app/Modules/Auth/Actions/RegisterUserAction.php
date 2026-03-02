<?php

namespace App\Modules\Auth\Actions;

use App\Models\User;
use App\Modules\Auth\DTOs\RegisterUserDTO;
use Illuminate\Support\Facades\Hash;

/**
 * Class RegisterUserAction
 */
class RegisterUserAction
{
    /**
     * @param RegisterUserDTO $data
     * @return User
     */
    public function handle(RegisterUserDTO $data): User
    {
        return User::create([
            'name'     => $data->name,
            'email'    => $data->email,
            'password' => Hash::make($data->password),
            'role'     => $data->role,
        ]);
    }
}
