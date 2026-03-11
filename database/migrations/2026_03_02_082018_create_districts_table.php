<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id')
                  ->constrained('regions')
                  ->onDelete('cascade');
            $table->string('name', 100);
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['region_id','name']); // Unique per region
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('districts');
    }
};