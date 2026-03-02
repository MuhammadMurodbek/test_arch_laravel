<?php

namespace App\Modules\Task\Enums;

use App\Traits\HasValues;

enum Type: string
{
    use HasValues;

    case CALL = 'call';

    case MEETING = 'meeting';

    case EMAIL = 'email';

    case TASK = 'task';
}
