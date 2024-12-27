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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('feature_quick_bug_fixes')->nullable();
            $table->boolean('bug_fixes_basic')->default(false);
            $table->boolean('bug_fixes_standard')->default(false);
            $table->boolean('bug_fixes_premium')->default(false);
            $table->string('feature_custom_laravel')->nullable();
            $table->boolean('custom_features_basic')->default(false);
            $table->boolean('custom_features_standard')->default(false);
            $table->boolean('custom_features_premium')->default(false);
            $table->string('feature_responsive_website')->nullable();
            $table->boolean('responsive_basic')->default(false);
            $table->boolean('responsive_standard')->default(false);
            $table->boolean('responsive_premium')->default(false);
            $table->integer('pages_basic')->nullable();
            $table->integer('pages_standard')->nullable();
            $table->integer('pages_premium')->nullable();
            $table->integer('revisions_basic')->nullable();
            $table->integer('revisions_standard')->nullable();
            $table->string('revisions_premium')->nullable();
            $table->boolean('content_upload_basic')->default(false);
            $table->boolean('content_upload_standard')->default(false);
            $table->boolean('content_upload_premium')->default(false);
            $table->boolean('plugins_basic')->default(false);
            $table->boolean('plugins_standard')->default(false);
            $table->boolean('plugins_premium')->default(false);
            $table->integer('price_basic')->nullable();
            $table->integer('price_standard')->nullable();
            $table->integer('price_premium')->nullable();
            $table->string('extra_option')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
