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
        Schema::create('actives', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('buyer'); // BUYER: stores the buyer's name or ID
            $table->string('gig'); // GIG: stores the gig/project/task name
            $table->date('due_on'); // DUE ON: stores the due date
            $table->decimal('total', 10, 2); // TOTAL: stores the total amount (up to 10 digits, 2 decimals)
            $table->text('note')->nullable(); // NOTE: stores additional notes (optional)
            $table->timestamps(); // Created_at and Updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actives');
    }
};
