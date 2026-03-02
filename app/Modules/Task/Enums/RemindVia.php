<?php

namespace App\Modules\Task\Enums;

use App\Traits\HasValues;

enum RemindVia: string
{
    use HasValues;

    case EMAIL = 'email';

    case SMS = 'sms';


}
