<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGigsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('gigs')) {
            Schema::create('gigs', function (Blueprint $table) {
                $table->id();
                $table->string('title'); // Gig title
                $table->string('category'); // Category
                $table->string('sub_category'); // Sub-category
                $table->string('service_type'); // Service type
                $table->string('metadata')->nullable(); // Metadata
                $table->string('tags')->nullable(); // Search tags (comma-separated)
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        if (Schema::hasTable('gigs')) {
            Schema::dropIfExists('gigs');
        }
    }
}
