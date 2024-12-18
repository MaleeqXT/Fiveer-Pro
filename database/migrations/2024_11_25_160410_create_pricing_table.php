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
        Schema::create('pricing', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gig_id')->nullable(); // Add a nullable gig_id column
            $table->foreign('gig_id')->references('id')->on('overview')->onDelete('cascade');
            $table->string('basic_name')->nullable();
            $table->string('standard_name')->nullable();
            $table->string('premium_name')->nullable();
            $table->text('basic_description')->nullable();
            $table->text('standard_description')->nullable();
            $table->text('premium_description')->nullable();
            $table->integer('basic_days')->nullable();
            $table->integer('standard_days')->nullable();
            $table->integer('premium_days')->nullable();

            $table->integer('basic_pages')->nullable();
    $table->integer('standard_pages')->nullable();
    $table->integer('premium_pages')->nullable();
    
    $table->string('basic_revisions')->nullable();
    $table->string('standard_revisions')->nullable();
    $table->string('premium_revisions')->nullable();
    
    $table->boolean('basic_content_upload')->default(false);
    $table->boolean('standard_content_upload')->default(false);
    $table->boolean('premium_content_upload')->default(false);
    
    $table->boolean('basic_plugins')->default(false);
    $table->boolean('standard_plugins')->default(false);
    $table->boolean('premium_plugins')->default(false);
    
    $table->boolean('basic_ecommerce')->default(false);
    $table->boolean('standard_ecommerce')->default(false);
    $table->boolean('premium_ecommerce')->default(false);
    
    $table->integer('basic_products')->nullable();
    $table->integer('standard_products')->nullable();
    $table->integer('premium_products')->nullable();
    
    $table->boolean('basic_payment')->default(false);
    $table->boolean('standard_payment')->default(false);
    $table->boolean('premium_payment')->default(false);
    
    $table->boolean('basic_speed')->default(false);
    $table->boolean('standard_speed')->default(false);
    $table->boolean('premium_speed')->default(false);
    
    $table->boolean('basic_social_media')->default(false);
    $table->boolean('standard_social_media')->default(false);
    $table->boolean('premium_social_media')->default(false);
    
    $table->integer('basic_price')->nullable();
    $table->integer('standard_price')->nullable();
    $table->integer('premium_price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricing');
    }
};
