<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blacklisted_firms', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('address', 250);
            $table->string('from', 30)->nullable();
            $table->string('to', 30)->nullable();
            $table->text('reasons');
            $table->string('type', 100);
            $table->string('filename', 100)->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blacklisted_firms');
    }
};
