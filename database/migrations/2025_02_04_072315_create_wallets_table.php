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

            $table->string('wallet_key');

            $table->decimal('balance', 10, 2)->default(0);
            $table->string('currency', 10)->default('USD');

            $table->integer('status')->default(1);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('sort_by')->default(0)->nullable();
            $table->boolean('is_active')->default(true)->nullable();
            $table->timestamps();
            $table->softDeletes();
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
