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
        Schema::create('call_back_requests', function (Blueprint $table) {
            $table->id();
            
            /*
            $table->unsignedBigInteger('handled_by')->nullable(); // Admin who handles the inquiry
            $table->foreign('handled_by')->references('id')->on('system_users')->onDelete('set null');
            */
            $table->foreignId('handled_by')->nullable()->default(1);

            $table->string('name'); // Customer Name
            $table->string('email')->nullable();
            $table->string('contact')->nullable();
            $table->text('message');
            $table->integer('status')->default(1);

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
        Schema::dropIfExists('call_back_requests');
    }
};
