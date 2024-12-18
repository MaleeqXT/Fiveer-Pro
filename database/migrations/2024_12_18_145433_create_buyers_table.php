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
            Schema::create('buyers', function (Blueprint $table) {
                $table->id();
                $table->string('buyer_image');
                $table->string('buyer_name');
                $table->integer('completed_orders');
                $table->decimal('amount_spent');
                $table->dateTime('last_order'); // Ensure this is a datetime column
                $table->timestamps();
            });
        }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buyers');
    }
};
