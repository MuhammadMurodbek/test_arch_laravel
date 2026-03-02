<?php

namespace App\Modules\Task\Enums;

use App\Traits\HasValues;

enum Status: string
{
    use HasValues;

    case PENDING = 'pending';

    case IN_PROGRESS = 'in_progress';

    case DONE = 'done';

    case CANCELLED = 'cancelled';


}
