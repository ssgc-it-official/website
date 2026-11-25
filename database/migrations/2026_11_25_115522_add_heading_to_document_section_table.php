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
        Schema::table('document_sections', function (Blueprint $table) {
            $table->string('heading')->nullable()->after('name');
            $table->string('sub_heading')->nullable()->after('heading');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('document_section', function (Blueprint $table) {
            //
        });
    }
};
