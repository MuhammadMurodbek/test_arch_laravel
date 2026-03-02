<?php

namespace App\Modules\Task\Models;

use App\Models\User;
use App\Modules\Client\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'client_id',
        'type',
        'title',
        'description',
        'priority',
        'status',
        'deadline',
        'is_recurring',
        'recurrence_type',
        'remind_before_minutes',
        'remind_via',
        'reminder_sent_at',
        'completed_at'
    ];

    public function manager(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
