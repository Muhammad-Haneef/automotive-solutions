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
        Schema::create('sms_api_integrations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('sms_gateway_id');
            $table->string('api_user_name');
            $table->string('api_url');
            $table->string('api_key');
            $table->string('api_password');
            $table->string('mask')->nullable();
            $table->boolean('is_default_gateway')->default(true)->nullable();

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
        Schema::dropIfExists('sms_api_integrations');
    }
};
