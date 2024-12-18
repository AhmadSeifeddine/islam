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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('scholar_id')->nullable()->constrained('scholars')->onDelete('set null');
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('cascade');
            $table->text('description')->nullable();
            $table->date('publication_date')->nullable();
            $table->string('genre')->nullable();
            $table->string('language')->nullable();
            $table->enum('status', ['show', 'hide'])->default('show');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
