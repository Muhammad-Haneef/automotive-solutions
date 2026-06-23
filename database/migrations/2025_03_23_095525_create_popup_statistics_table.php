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

        Schema::create('popup_statistics', function (Blueprint $table) {
            $table->id();

            $table->foreignId('popup_id');

            $table->bigInteger('views')->nullable()->default(0);
            $table->bigInteger('clicks')->nullable()->default(0);
            $table->string('coversion_rate')->nullable()->default(0);

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
        Schema::dropIfExists('popup_statistics');
    }
};
