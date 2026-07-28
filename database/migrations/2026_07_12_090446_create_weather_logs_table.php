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
        Schema::create('weather_logs', function (Blueprint $table) {
            $table->id();

            $table->foreignId('country_id')
                  ->constrained('countries')
                  ->cascadeOnDelete();

            $table->decimal('temperature', 5, 2)->nullable();
            $table->decimal('rainfall', 6, 2)->nullable();
            $table->decimal('wind_speed', 6, 2)->nullable();
            $table->integer('humidity')->nullable();

            $table->integer('weather_code')->nullable();
            $table->string('weather_description')->nullable();

            $table->date('weather_date');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weather_logs');
    }
};