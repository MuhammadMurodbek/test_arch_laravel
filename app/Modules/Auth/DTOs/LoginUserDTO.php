<?php

namespace App\Modules\Auth\DTOs;

use App\DTOs\BaseDataObject;

/**
 * Class LoginUserDTO.
 *
 * @property string $email
 * @property string $password
 */
class LoginUserDTO extends BaseDataObject
{
    /**
     * @var string
     */
    public string $email;

    /**
     * @var string
     */
    public string $password;
}
