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

        Schema::create('supports', function (Blueprint $table) {
            $table->id();

            $table->foreignId('support_type_id');
            $table->foreignId('support_status_id');
            $table->foreignId('order_id')->nullable()->default(0);

            $table->string('code');
            $table->string('name');
            $table->string('email');
            $table->string('contact');
            $table->string('subject');
            $table->string('message');

            $table->dateTime('callback_at');
            
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
        Schema::dropIfExists('supports');
    }
};
