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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('title');
            $table->text('description')->nullable();
            
            // Define offer type (Flat Discount, Percentage, etc.)
            $table->decimal('discount', 10, 2);
            $table->enum('discount_type', ['Flat', '%'])->default('Flat');

            // Define offer scope (Product, Category, Brand, or All)
            $table->integer('offer_scope')->default('0');

            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();

            $table->integer('sort_by')->default(0);
            $table->boolean('is_active')->default(true);
            
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('offer_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('offer_id')->constrained()->onDelete('cascade');
            
            $table->unsignedBigInteger('item_id')->index();// Product/Category/Brand ID

            $table->integer('sort_by')->default(0);
            $table->boolean('is_active')->default(true);
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offer_items');
        Schema::dropIfExists('offers');
    }
};
