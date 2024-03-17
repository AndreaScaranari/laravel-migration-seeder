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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('business_name', 40);
            $table->string('starting_station', 40);
            $table->string('last_station', 40);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code', 10);
            $table->tinyInteger('cars_number')->unsigned();
            $table->boolean('on_time')->default(1);
            $table->boolean('canceled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
