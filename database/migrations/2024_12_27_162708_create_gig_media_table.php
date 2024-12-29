<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
            {
                Schema::create('gig_media', function (Blueprint $table) {
                    $table->id();
                    $table->unsignedBigInteger('gig_id'); // Assuming each media belongs to a specific gig
                    $table->string('file_path');
                    $table->string('file_type'); // e.g., image, video, document
                    $table->timestamps();

                    $table->foreign('gig_id')->references('id')->on('gigs')->onDelete('cascade');
                });
            }




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gig_media');
    }
};
