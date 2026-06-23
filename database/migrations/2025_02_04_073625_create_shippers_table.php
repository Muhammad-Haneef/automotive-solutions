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
        Schema::create('shippers', function (Blueprint $table) {
            
            $table->id();
            $table->string('logo')->nullable();
            $table->string('title');
            $table->string('email');
            $table->string('about');
            
            $table->string('contact_person')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();

            $table->string('tracking_url')->nullable();
            $table->string('website')->nullable();
            //$table->json('shipping_methods')->nullable();
            $table->integer('min_delivery_time')->nullable();
            $table->integer('max_delivery_time')->nullable();
            //$table->enum('cost_type', ['flat', 'weight_based', 'distance_based', 'free'])->default('flat');
            $table->integer('cost_type')->default(1);
            $table->decimal('base_shipping_cost', 10, 2)->nullable();
            $table->decimal('additional_cost_per_kg', 10, 2)->nullable();
            $table->decimal('additional_cost_per_km', 10, 2)->nullable();
            //$table->json('coverage_countries')->nullable();
            //$table->json('coverage_regions')->nullable();

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
        Schema::dropIfExists('shippers');
    }
};
