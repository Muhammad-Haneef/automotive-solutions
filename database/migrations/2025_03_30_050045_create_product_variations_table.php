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
        Schema::create('product_variations', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('product_id');
            $table->foreignId('attribute_id');
            $table->foreignId('attribute_value_id');

            $table->string('sku');
            $table->string('image');
            $table->float('cost');
            $table->float('price');
            $table->float('sale_price');

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
        Schema::dropIfExists('product_variations');
    }
};
