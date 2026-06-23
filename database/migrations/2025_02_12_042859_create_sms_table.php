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
        Schema::create('sms', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('sms_category_id')->default(0)->nullable();
            $table->foreignId('user_id')->default(0)->nullable();
            $table->string('message');
            $table->string('recipient_number');
            $table->string('response')->nullable();
            $table->string('order_number')->default(0)->nullable();
            $table->enum('status', ['pending', 'sent', 'failed'])->default('sent');

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
        Schema::dropIfExists('sms');
    }
};
