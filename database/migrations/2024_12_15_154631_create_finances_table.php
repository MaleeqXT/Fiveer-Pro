<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancesTable extends Migration
{
    public function up()
    {
        Schema::create('finances', function (Blueprint $table) {
            $table->id();
            $table->string('month');
            $table->string('year');
            $table->decimal('amount', 15, 2)->nullable(); // To store financial amount
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('finances');
    }
}
