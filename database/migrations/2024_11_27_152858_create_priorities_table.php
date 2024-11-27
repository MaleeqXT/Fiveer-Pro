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
        Schema::create('priorities', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('buyer'); // BUYER field (name or identifier)
            $table->string('gig'); // GIG field (e.g., project or task name)
            $table->date('due_on'); // DUE ON field (date)
            $table->decimal('total', 10, 2); // TOTAL field (amount with 2 decimal places)
            $table->text('note')->nullable(); // NOTE field (optional notes)
            $table->timestamps(); // Created_at and Updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('priorities');
    }
};
