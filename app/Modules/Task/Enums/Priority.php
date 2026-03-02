<?php

namespace App\Modules\Task\Enums;

use App\Traits\HasValues;

enum Priority: string
{
    use HasValues;

    case LOW = 'low';

    case MEDIUM = 'medium';

    case HIGH = 'high';

    case CRITICAL = 'critical';
}
