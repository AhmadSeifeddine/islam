<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('youtubes', function (Blueprint $table) {
            $table->boolean('home_page')->default(false);
            $table->string('type')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('youtubes', function (Blueprint $table) {
            $table->dropColumn(['home_page', 'type']);
        });
    }
};
