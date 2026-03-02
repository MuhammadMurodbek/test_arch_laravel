<?php

namespace App\Modules\Auth\Actions;

use App\Actions\CoreAction;
use App\Modules\Auth\DTOs\LoginUserDTO;
use App\Modules\User\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

/**
 * Class LoginUserAction
 */
final class LoginUserAction extends CoreAction
{
    /**
     * @param LoginUserDTO $data
     * @return string
     * @throws ValidationException
     */
    public function handle(LoginUserDTO $data): string
    {
        $user = User::where('email', $data->email)->first();

        if (!$user || !Hash::check($data->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $user->createToken('auth_token')->plainTextToken;
    }
}
