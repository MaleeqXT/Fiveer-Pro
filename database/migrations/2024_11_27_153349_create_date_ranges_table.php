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
        Schema::create('date_ranges', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('month'); // Store month (1-12)
            $table->unsignedSmallInteger('year'); // Store year
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('date_ranges');
    }
};
