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

        Schema::create('vendors', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id');
            $table->foreignId('payment_method_id')->nullable()->default(0);

            $table->string('logo')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->string('email')->nullable();
            $table->string('description')->nullable();
            $table->string('website')->nullable();
            $table->string('address')->nullable();
            $table->string('contact')->nullable();

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
        Schema::dropIfExists('vendors');
    }
};
