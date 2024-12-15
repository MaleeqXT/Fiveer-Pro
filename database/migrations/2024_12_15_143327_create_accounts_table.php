<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('accounts')) { // Check if the table already exists
            Schema::create('accounts', function (Blueprint $table) {
                $table->id(); // Primary Key
                $table->string('full_name'); // Full Name Field
                $table->string('email')->unique(); // Email Field
                $table->string('online_status'); // Online Status Field
                $table->timestamps(); // Created_at and Updated_at
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
