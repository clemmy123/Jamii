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
        Schema::create('countries', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name', 100)->unique()->comment('Country name');
            $table->string('code', 10)->unique()->comment('ISO country code');
            $table->timestamps(); // created_at & updated_at
            $table->softDeletes(); // optional: allows logical delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};