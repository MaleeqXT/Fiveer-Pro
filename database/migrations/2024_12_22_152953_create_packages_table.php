<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('feature_quick_bug_fixes')->nullable();
            $table->boolean('bug_fixes_basic')->default(0);
            $table->boolean('bug_fixes_standard')->default(0);
            $table->boolean('bug_fixes_premium')->default(0);
            // Add columns for all other fields
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
