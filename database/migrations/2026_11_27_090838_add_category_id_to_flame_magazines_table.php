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
        Schema::table('flame_magazines', function (Blueprint $table) {
            $table->foreignId('category_id')
                ->nullable()
                ->after('title')
                ->constrained('media_categories')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('flame_magazines', function (Blueprint $table) {
            $table->dropConstrainedForeignId('category_id');
        });
    }
};
