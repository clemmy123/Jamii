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
        Schema::create('streets', function (Blueprint $table) {
            $table->id();
            
            // Link to parent ward
            $table->foreignId('ward_id')
                  ->constrained('wards')
                  ->onDelete('cascade');

            $table->string('name', 100)->comment('Street name');
            $table->timestamps();
            $table->softDeletes();

            // Unique per ward
            $table->unique(['ward_id', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('streets');
    }
};