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
        Schema::create('product_video_sections', function (Blueprint $table) {
            $table->id();

            $table->foreignId('product_id');

            $table->string('title');
            $table->string('description');
            $table->integer('per_row');

            $table->integer('show_title');
            $table->integer('show_description');
            $table->integer('show_video_title');


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
        Schema::dropIfExists('product_video_sections');
    }
};
