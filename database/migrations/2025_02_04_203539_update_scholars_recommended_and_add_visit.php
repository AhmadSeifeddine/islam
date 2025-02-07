<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('scholars', function (Blueprint $table) {
            // Drop the old column
            $table->dropColumn('isRecommended');

            // Add new columns
            $table->integer('recommended_score')->default(0);
            $table->integer('visit_count')->default(0);
        });
    }

    public function down(): void
    {
        Schema::table('scholars', function (Blueprint $table) {
            // Remove new columns
            $table->dropColumn(['recommended_score', 'visit_count']);

            // Recreate old column
            $table->boolean('isRecommended')->default(0);
        });
    }
};
