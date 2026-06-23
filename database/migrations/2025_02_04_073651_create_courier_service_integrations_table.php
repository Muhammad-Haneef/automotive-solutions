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
        Schema::create('courier_service_integrations', function (Blueprint $table) {
            $table->id();
            

            $table->foreignId('courier_service_id')->constrained('courier_services')->onDelete('cascade');

            $table->string('api_user_name')->unique();
            $table->string('api_key')->nullable();
            $table->string('api_url')->nullable();
            $table->string('tracking_url')->nullable();
            
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
        Schema::dropIfExists('courier_service_integrations');
    }
};
