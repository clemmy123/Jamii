<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('forum_sector', function (Blueprint $table) {
            $table->foreignId('forum_id')
                  ->constrained('forums')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();

            $table->foreignId('sector_id')
                  ->constrained('sectors')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();

            $table->primary(['forum_id', 'sector_id']); // composite primary key

            $table->timestamps(); // optional but good for auditing
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('forum_sector');
    }
};