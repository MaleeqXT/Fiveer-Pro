<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('passwords', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('user_id'); // For associating with a user
            $table->string('password'); // Encrypted Password Field
            $table->timestamps(); // Created_at and Updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('passwords');
    }
};
