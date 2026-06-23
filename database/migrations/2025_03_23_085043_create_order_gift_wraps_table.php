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
        Schema::create('order_gift_wraps', function (Blueprint $table) {
            $table->id();

            //$table->unsignedBigInteger('order_id');
            //$table->unsignedBigInteger('gift_wrap_id');

            $table->foreignId('order_id');
            $table->foreignId('gift_wrap_id');
            $table->text('message')->nullable();
            $table->decimal('price', 10, 2)->default(0);

            $table->integer('sort_by')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
            $table->softDeletes();

            // Add Foreign Keys
            //$table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            //$table->foreign('gift_wrap_id')->references('id')->on('gift_wraps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_gift_wraps');
    }
};
