<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();

            // Foreign Key
            $table->foreignId('forum_id')
                  ->constrained('forums')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();

            $table->string('activity_name', 200);
            $table->text('description')->nullable();

            $table->date('start_date');
            $table->date('end_date')->nullable();

            $table->decimal('budget', 15, 2)->default(0);

            $table->enum('status', [
                'planned',
                'ongoing',
                'completed',
                'cancelled'
            ])->default('planned');

            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index(['forum_id', 'status']);
            $table->index(['start_date', 'end_date']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};