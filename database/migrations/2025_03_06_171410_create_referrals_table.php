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
        Schema::create('referrals', function (Blueprint $table) {
            $table->id();

            //$table->foreignId('referrer_id')->constrained('users')->onDelete('cascade');
            //$table->foreignId('referred_id')->nullable()->constrained('users')->onDelete('cascade');

            $table->foreignId('referrer_id')->index();
            $table->foreignId('referred_id')->index();
            

            $table->string('referral_code')->unique();
            $table->boolean('rewarded')->default(false);            

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
        Schema::dropIfExists('referrals');
    }
};
