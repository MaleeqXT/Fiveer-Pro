<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyersTable extends Migration
{
    public function up()
    {
        Schema::create('buyers', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('buyer_image');
            $table->string('buyer_name');
            $table->integer('completed_orders');
            $table->decimal('amount_spent', 8, 2); // Adjust precision if needed
            $table->date('last_order');
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('buyers');
    }
}
