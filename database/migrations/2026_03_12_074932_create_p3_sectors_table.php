<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('p3_sectors', function (Blueprint $table) {

            // Primary Key
            $table->id();

            // Sector Name
            $table->string('name')->unique();

            // Skills available in the sector
            $table->text('skills');

            // Raw materials used in the sector
            $table->text('raw_materials');

            // Timestamps
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('p3_sectors');
    }
};