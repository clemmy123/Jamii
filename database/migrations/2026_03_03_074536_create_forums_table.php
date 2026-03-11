<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('forums', function (Blueprint $table) {
            $table->id();

            // Forum basic information
            $table->string('name', 150);
            $table->string('registration_number')->unique();
            $table->date('registration_date')->nullable();

            // Economic information
            $table->foreignId('sector_id')
                  ->nullable()
                  ->constrained('sectors')
                  ->nullOnDelete();

            // Location (belongs to street)
            $table->foreignId('street_id')
                  ->constrained('streets')
                  ->cascadeOnDelete();

            // Forum details
            $table->integer('total_members')->default(0);
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(true);

            $table->timestamps();
            $table->softDeletes();

            // Prevent duplicate forum name in same street
            $table->unique(['street_id', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forums');
    }
};