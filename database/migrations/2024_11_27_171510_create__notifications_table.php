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
        Schema::create('_notifications', function (Blueprint $table) {
            $table->id();
            $table->string('notifications'); // Notifications field to describe the notification content
            $table->string('types'); // Types of notifications (e.g., email, SMS, etc.)
            $table->string('email')->nullable(); // Email address for notification (nullable)
            $table->string('mobile')->nullable(); // Mobile number for notification (nullable)
            $table->timestamps(); // created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_notifications');
    }
};
