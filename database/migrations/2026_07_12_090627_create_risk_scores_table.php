<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('risk_scores', function (Blueprint $table) {

            $table->id();

            $table->foreignId('country_id')
                ->constrained('countries')
                ->cascadeOnDelete();

            $table->decimal('weather_score',5,2);

            $table->decimal('economic_score',5,2);

            $table->decimal('currency_score',5,2);

            $table->decimal('news_score',5,2);

            $table->decimal('total_score',5,2);

            $table->enum('risk_level',[
                'Low',
                'Medium',
                'High'
            ]);

            $table->date('calculated_at');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('risk_scores');
    }
};