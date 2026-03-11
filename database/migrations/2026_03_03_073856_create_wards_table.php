<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('wards', function (Blueprint $table) {
            $table->id();
            
            // Link directly to the Council
            $table->foreignId('council_id')
                  ->constrained('councils')
                  ->onDelete('cascade');
            
            $table->string('name', 100);
            $table->timestamps();
            $table->softDeletes();

            // Ensures ward names aren't duplicated within the same council
            $table->unique(['council_id', 'name']); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('wards');
    }
};