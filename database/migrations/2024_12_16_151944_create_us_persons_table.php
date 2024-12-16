<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsPersonsTable extends Migration
{
    public function up()
{
    Schema::create('us_persons', function (Blueprint $table) {
        $table->id();
        $table->string('name')->nullable();
        $table->boolean('is_us_person')->default(false);
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('us_persons');
    }
}
