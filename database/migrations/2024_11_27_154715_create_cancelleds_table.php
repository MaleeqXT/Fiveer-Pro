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
        Schema::create('cancelleds', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('buyer'); // BUYER: Name or identifier of the buyer
            $table->string('gig'); // GIG: Name of the gig, project, or task
            $table->date('due_on'); // DUE ON: Due date of the gig/task
            $table->decimal('total', 10, 2); // TOTAL: Total amount (10 digits, 2 decimals)
            $table->text('note')->nullable(); // NOTE: Additional notes (optional)
            $table->timestamps(); // created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cancelleds');
    }
};
