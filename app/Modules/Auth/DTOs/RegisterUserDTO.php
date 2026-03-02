<?php

namespace App\Modules\Auth\DTOs;

use App\DTO\BaseDataObject;

/**
 * Class RegisterUserDTO.
 *
 * @property string $name
 * @property string $email
 * @property string $password
 */
final class RegisterUserDTO extends BaseDataObject
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $email;

    /**
     * @var string
     */
    public string $password;

    /**
     * @var string
     */
    public string $role;
}
