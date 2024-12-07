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
        Schema::create('business_details', function (Blueprint $table) {
            $table->id();
            $table->string('service_plan');
            $table->string('business_name')->nullable();
            $table->text('business_description')->nullable();
            $table->string('business_url')->nullable();
            $table->string('business_type');
            $table->string('business_size');
            $table->string('business_industry')->nullable();
            $table->string('business_stage');
            $table->timestamps();
        });
        
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_details');
    }
};
