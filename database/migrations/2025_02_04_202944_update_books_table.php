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
        Schema::table('books', function (Blueprint $table) {
            // Drop existing columns
            $table->dropColumn(['genre', 'publication_date']);

            // Add new columns
            $table->integer('page_number')->nullable();
            $table->integer('visit_count')->default(0);
            $table->integer('download_count')->default(0);
            $table->boolean('home_page')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            // Recreate dropped columns
            $table->string('genre')->nullable();
            $table->date('publication_date')->nullable();

            // Remove new columns
            $table->dropColumn([
                'page_number',
                'visit_count',
                'download_count',
                'home_page'
            ]);
        });
    }
};
