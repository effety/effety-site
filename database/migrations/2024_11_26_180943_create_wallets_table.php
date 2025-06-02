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
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); 
            $table->string('user_type');
            $table->foreignId('currency_id'); // FK to currencies table
            $table->string('currency_code'); 
            $table->decimal('balance', 15, 2)->default(0); 
            $table->timestamps();

            // Composite unique index to prevent duplicate wallets for the same user and currency
            $table->unique(['user_id', 'user_type', 'currency_id']);

            // Index for efficient querying
            $table->index(['user_id', 'user_type', 'currency_code']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallets');
    }
};
