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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();

            $table->foreignId('order_id')->constrained()->onDelete('cascade'); // Links to main orders table
            //$table->foreignId('order_vendor_id')->constrained('order_vendors')->onDelete('cascade'); // Links to sub-orders (per vendor)
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Links to the products table
            $table->foreignId('vendor_id')->constrained('users')->onDelete('cascade'); // Links to the vendor (seller)
            
            $table->integer('qty')->default(1);
            $table->decimal('price', 10, 2);
            $table->decimal('subtotal', 10, 2);
            $table->decimal('discount', 10, 2)->default(0.00);
            $table->decimal('tax', 10, 2)->default(0.00);
            $table->decimal('total', 10, 2);
            
            $table->decimal('cost', 10, 2);
            $table->decimal('cost_total', 10, 2);

            $table->enum('status', ['pending', 'processing', 'shipped', 'delivered', 'returned', 'canceled'])->default('pending');
            $table->text('return_reason')->nullable();
            $table->text('cancellation_reason')->nullable();
          
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
        Schema::dropIfExists('order_items');
    }
};
