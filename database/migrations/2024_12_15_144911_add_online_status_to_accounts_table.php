<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasColumn('accounts', 'online_status')) { // Check if column exists
            Schema::table('accounts', function (Blueprint $table) {
                $table->string('online_status')->after('email'); // Add the column
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('accounts', 'online_status')) { // Check if column exists
            Schema::table('accounts', function (Blueprint $table) {
                $table->dropColumn('online_status'); // Drop the column
            });
        }
    }
};
