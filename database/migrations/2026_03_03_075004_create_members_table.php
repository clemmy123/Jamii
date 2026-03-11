<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();

            // Foreign Key
            $table->foreignId('forum_id')
                  ->constrained('forums')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();

            // Personal Info
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('national_id', 50)->unique();
            $table->string('phone', 20)->nullable();
            $table->string('email', 150)->nullable()->unique();

            // Role
            $table->enum('level', [
                'chairperson',
                'secretary',
                'treasurer',
                'member'
            ])->default('member');

            $table->date('joined_date');

            // Status (recommended)
            $table->enum('status', ['active', 'inactive', 'suspended'])
                  ->default('active');

            $table->timestamps();
            $table->softDeletes(); // optional but recommended

            // Indexes
            $table->index(['forum_id', 'level']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};