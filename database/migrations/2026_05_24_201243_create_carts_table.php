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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->default(1)->index();
            $table->string('session_id')->nullable()->index();
            $table->foreignId('product_id')->default(1)->index();
            $table->integer('variation_id')->default(1)->index();
            $table->integer('quantity')->default(1);
            $table->decimal('price', 10, 2);         // snapshot price at time of adding
            $table->decimal('sale_price', 10, 2)->nullable();
            $table->json('options')->nullable();      // color, size, etc.
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
