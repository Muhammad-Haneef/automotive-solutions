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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->default(0);
            $table->foreignId('brand_id')->default(0);
            $table->foreignId('warehouse_id')->nullable()->default(0);
            $table->foreignId('shipping_class_id')->nullable()->default(0);
            
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('sku')->unique()->nullable();
            $table->string('barcode')->nullable();
            $table->string('model')->nullable();
            $table->text('excerpt')->nullable();
            $table->longText('description')->nullable();
            $table->longText('details')->nullable();
            $table->integer('type')->default(1);
            $table->string('thumbnail')->nullable();
            $table->string('thumbnail2')->nullable();
            
            $table->decimal('price', 10, 2);
            $table->decimal('sale_price', 10, 2)->nullable();
            $table->decimal('cost', 10, 2)->nullable();
            
            $table->integer('stock_qty')->nullable()->default(0);
            $table->integer('stock_status')->nullable()->default(1);
            $table->integer('low_stock_alert')->default(0);
            
            $table->boolean('backorderable')->nullable()->default(false);
            $table->string('batch_no')->nullable();
            $table->date('expiration_date')->nullable();
            $table->decimal('weight', 8, 2)->nullable();
            $table->string('dimensions')->nullable();
            
            $table->string('meta_title')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            
            $table->decimal('shipping_weight', 8, 2)->nullable();
            $table->string('shipping_dimensions')->nullable();
            $table->boolean('is_global')->nullable()->default(false);
            
            $table->text('return_policy')->nullable();
            $table->integer('warranty_period')->nullable();
            $table->integer('warranty_period_unit')->nullable()->default(0);
            $table->integer('warranty_type')->nullable()->default(0);
            $table->boolean('return_able')->default(false);
            
            $table->boolean('featured')->default(false);
            $table->boolean('upsellable')->default(false);
            $table->boolean('cross_sellable')->default(false);

            $table->string('file')->nullable();
            $table->integer('license_type')->nullable()->default(0);
            $table->integer('download_limit')->nullable();        

            $table->string('min_purchase')->nullable();
            $table->string('max_purchase')->nullable();

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
        Schema::dropIfExists('products');
    }
};
