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
            $table->id();
            $table->string('gig_name');                  // Name of the gig
            $table->unsignedBigInteger('impressions')->default(0); // Total impressions
            $table->unsignedBigInteger('clicks')->default(0);      // Total clicks
            $table->unsignedInteger('orders')->default(0);         // Total orders
            $table->unsignedInteger('cancellations')->default(0);  // Total cancellations
            $table->timestamps();
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
