<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('risk_scores', function (Blueprint $table) {

            $table->decimal('port_score', 5, 2)
                  ->after('news_score');

        });
    }

    public function down(): void
    {
        Schema::table('risk_scores', function (Blueprint $table) {

            $table->dropColumn('port_score');

        });
    }
};