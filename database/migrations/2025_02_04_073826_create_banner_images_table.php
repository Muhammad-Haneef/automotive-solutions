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
        Schema::create('banner_images', function (Blueprint $table) {
            $table->id();

            $table->foreignId('banner_id')->index();
            
            $table->string('image_alt')->nullable();
            $table->string('image_link')->nullable()->default('#');
            $table->string('image_url');
            
            $table->integer('image_sort_by')->default(0)->nullable();
            $table->boolean('image_is_active')->default(true)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner_images');
    }
};
