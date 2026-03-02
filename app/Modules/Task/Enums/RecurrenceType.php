<?php

namespace App\Modules\Task\Enums;

use App\Traits\HasValues;

enum RecurrenceType: string
{
    use HasValues;

    case DAILY = 'daily';

    case WEEKLY = 'weekly';
}
