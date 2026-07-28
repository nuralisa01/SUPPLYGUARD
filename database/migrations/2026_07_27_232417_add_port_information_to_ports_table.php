<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('ports', function (Blueprint $table) {

            $table->enum('status', [
                'Active',
                'Busy',
                'Closed'
            ])->default('Active');

            $table->enum('congestion_level', [
                'Low',
                'Medium',
                'High'
            ])->default('Low');

            $table->text('description')->nullable();

        });
    }

    public function down(): void
    {
        Schema::table('ports', function (Blueprint $table) {

            $table->dropColumn([
                'status',
                'congestion_level',
                'description'
            ]);

        });
    }
};