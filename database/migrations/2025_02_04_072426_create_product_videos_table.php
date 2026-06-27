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
        Schema::create('product_videos', function (Blueprint $table) {
            $table->id();
/*
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_video_section_id')->constrained()->onDelete('cascade');
*/

            $table->foreignId('product_id')->index();
            $table->foreignId('product_video_section_id')->index();

            $table->string('title')->nullable();
            $table->string('url');
            
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
        Schema::dropIfExists('product_videos');
    }
};
