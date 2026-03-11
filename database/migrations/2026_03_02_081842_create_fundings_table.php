<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('funding', function (Blueprint $table) {
            $table->id();

            // Foreign Key
            $table->foreignId('forum_id')
                  ->constrained('forums')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();

            // Funding Info
            $table->string('donor_name', 200);
            $table->decimal('amount', 15, 2)->default(0);
            $table->date('funding_date');
            $table->text('purpose')->nullable();

            // Status tracking
            $table->enum('status', ['pending', 'approved', 'rejected'])
                  ->default('pending');

            // Timestamps & soft delete
            $table->timestamps();
            $table->softDeletes();

            // Indexes for faster queries
            $table->index(['forum_id', 'funding_date', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('funding');
    }
};