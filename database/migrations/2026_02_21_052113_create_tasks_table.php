<?php

use App\Modules\Task\Enums\Priority;
use App\Modules\Task\Enums\RecurrenceType;
use App\Modules\Task\Enums\RemindVia;
use App\Modules\Task\Enums\Status;
use App\Modules\Task\Enums\Type;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('client_id')->nullable()->constrained('clients');
            $table->enum('type', Type::values());
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('priority', Priority::values());
            $table->enum('status', Status::values());
            $table->date('deadline');
            $table->boolean('is_recurring')->default(false);
            $table->enum('recurrence_type', RecurrenceType::values())->nullable();
            $table->integer('remind_before_minutes')->nullable();
            $table->enum('remind_via', RemindVia::values());
            $table->date('reminder_sent_at')->nullable();
            $table->date('completed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
