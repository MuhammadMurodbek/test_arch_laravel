<?php

namespace App\Modules\User\Enums;

use App\Traits\HasValues;

enum Roles: string
{
    use HasValues;

    case ADMIN = 'admin';

    case MANAGER = 'manager';


}
