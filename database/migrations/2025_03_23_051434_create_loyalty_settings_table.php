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
        Schema::create('loyalty_settings', function (Blueprint $table) {
            $table->id();
            $table->decimal('earn_rate', 8, 2)->default(1.00); // Points per $ spent
            $table->decimal('redeem_rate', 8, 2)->default(0.10); // $ discount per point
            $table->integer('expiration_days')->default(365); // Points expiry in days
            
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
        Schema::dropIfExists('loyalty_settings');
    }
};
