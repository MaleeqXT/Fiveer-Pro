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
        Schema::create('billing_details', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('company_name')->nullable();
            $table->string('country');
            $table->string('state_region');
            $table->string('address');
            $table->string('city');
            $table->string('postal_code');
            $table->string('tax_id')->nullable();
            $table->boolean('email_invoices')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billing_details');
    }
};
